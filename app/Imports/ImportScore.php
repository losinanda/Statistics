<?php

namespace App\Imports;

use App\Models\Score;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportScore implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    public function model(array $row)
    {
        return new Score([
            //
                'score' => $row[0],
        ]);
    }
}
