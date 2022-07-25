<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\FourthController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\SixthController;
use App\Http\Controllers\ThirdController;
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

Route::get('/', function () {
    return view('posts');
});

Route::get('/first',  [FirstController::class, 'index']);
Route::get('/second', [SecondController::class, 'index']);
Route::get('/third', [ThirdController::class, 'index']);
Route::get('/fourth', [FourthController::class, 'index']);
Route::get('/newSixth', [SixthController::class, 'index']);
