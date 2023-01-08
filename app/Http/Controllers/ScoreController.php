<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportScore;
use App\Exports\ExportScore;
use App\Models\Score;

class ScoreController extends Controller
{
    // Controller CRUD
    public function singledata()
    {
        // $scores = Score::orderBy('score')->paginate(10);
        $scores = Score::all();
        return view('admin.singledata', ['score' => $scores]);
    }

    public function addsingledata(Request $request)
    {
        // $this->validate($request, ['score' => 'required']);
        Score::create(['score' => $request->score]);
        return redirect()->back();
    }

    public function frequency_distribution_data()
    {        
        $scores = Score::select('score', Score::raw('COUNT(score) as frequency'))
            ->groupBy('score')
            ->orderBy('score')
            ->get();
            //->paginate(10);
        return view('admin.frequencydistributiondata', ['score' => $scores]);
    }

    public function description_data()
    {
        $count = Score::count('score');
        $max = Score::max('score');
        $min = Score::min('score');
        $avg = Score::avg('score');
        $score = Score::get('score');
        $var = 0.0;
        foreach ($score as $s) {
            $var += pow(($s['score'] - $avg), 2);
        }
        // dd($var);
        $deviation = (float)sqrt($var / $count);
        return view('admin.descriptiondata', [
            'count' => $count,
            'max'   => $max,
            'min'   => $min,
            'avg'   => round($avg,3),
            'deviation' => round($deviation,5)
        ]);
    }

    public function editdata(Request $request, $id)
    {
        // $this->validate($request, ['score' => 'required']);
        $s = $request->score;
        Score::find($id)->update(['score' => $s]);
        return redirect()->back();
    }

    public function deletedata($id)
    {
        Score::find($id)->delete();
        return redirect()->back();
    }

    public function classified_data()
    {
        $max = Score::max('score');
        $min = Score::min('score');
        $count = Score::count('score');

        $range = $max - $min;
        $total_class = ceil(1 + (3.3 * log($count, 10)));
        $width_class = ceil($range / $total_class);

        $limit = [];
        for ($i = 0; $i < $total_class; $i++) {
            array_push($limit, [
                'upper_limit' => $min + ($width_class * ($i + 1)) - 1,
                'lower_limit' => $min + ($width_class * $i),
            ]);
        }

        $arr1 = [];
        foreach ($limit as $l) {
            array_push($arr1, [
                'upper_limit' => $l['upper_limit'],
                'lower_limit' => $l['lower_limit'],
                // 'middle_value' => ceil(($l['upper_limit'] + $l['lower_limit']) / 2),
                'frequency' => Score::select('scores')
                    ->where([
                        ['score', '<=', $l['upper_limit']],
                        ['score', '>=', $l['lower_limit']]
                    ])
                    ->count(),
            ]);
        }

        unset($limit);

        $arr2 = [];
        $temp = 0;
        foreach ($arr1 as $a1) {
            $temp = $temp + $a1['frequency'];
            array_push($arr2, [
                'upper_limit' => $a1['upper_limit'],
                'lower_limit' => $a1['lower_limit'],
                'frequency' => $a1['frequency'],
                // 'middle_value' => $a1['middle_value'],
                'relative_frequency' => $temp,
                'percentage' => round(($a1['frequency'] / $count * 100), 2)
            ]);
        }

        unset($arr1);

        return view('admin.classifieddata', ['result' => $arr2]);
    }


    // Controller Import dan Export Data
    public function importScore(Request $request)
    {
        $path = $request->file('excel');
        // dd($path);
        Excel::import(new ImportScore, $path);
        return redirect()->back();
    }

    public function exportScore(Request $request)
    {
        return Excel::download(new ExportScore, 'score.csv');
    }
}
