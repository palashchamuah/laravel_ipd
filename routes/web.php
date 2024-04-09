<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[IpdController::class,'hosp_list']);
Route::post('/save',[IpdController::class,'savedata']);
Route::get('/admin',[IpdController::class,'showdata']);
Route::post('/',[IpdController::class,'upload']);
Route::get('/download{file}',[IpdController::class,'download']);

