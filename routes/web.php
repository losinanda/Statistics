<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.homepage');
})->name('homepage');

// Read
Route::get('/single_data', [ScoreController::class, 'singledata'])->name('singledata');
Route::get('/frequency_distribution_data', [ScoreController::class, 'frequency_distribution_data'])->name('frequencydistributiondata');
Route::get('/description_data', [ScoreController::class, 'description_data'])->name('descriptiondata');
Route::get('/classified_data', [ScoreController::class, 'classified_data'])->name('classifieddata');

// Create, Update, Delete
Route::post('/addsingledata', [ScoreController::class, 'addsingledata'])->name('addsingledata');
// Route::edit('/editdata/{id}', [ScoreController::class, 'editsingledata'])->name('editsingledata');
Route::post('/editdata/post/{id}', [ScoreController::class, 'editdata'])->name('editsingledata-post');
Route::get('/deletedata/{id}', [ScoreController::class, 'deletedata'])->name('deletedata');

// CSV
// Route::get('/import-score-file', [ScoreController::class, 'importScore'])->name('import-score');
Route::post('/import', [ScoreController::class, 'importScore'])->name('import');
Route::get('/export-score', [ScoreController::class, 'exportScore'])->name('export-score');
