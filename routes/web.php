<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([])->group(function () {
    Route::resource('tests', TestController::class)->only([
        'index', 'store', 'destroy', 'show',
    ]);
    Route::get('results', [TestController::class, 'resultsIndex']);
    Route::get('results/{testId}/{AnsweredUserId}', [TestController::class, 'results']);

    Route::resource('questions', QuestionController::class)->only([
        'store', 'update', 'destroy',
    ]);
});

Route::get('tests/{test}/public', [TestController::class, 'publicShow'])
    ->name('publicTest');

Route::post('submit_answer', [AnswerController::class, 'submit']);
