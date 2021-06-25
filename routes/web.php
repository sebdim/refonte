<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\PersonneController;

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
    return view('welcome');
});

Route::get('/index',[PersonneController::class,'create']);

Route::get('/structure', [StructureController::class,'index']);
Route::post('/store', [StructureController::class,'store']);

Route::get('/personne', [PersonneController::class,'index']);
Route::post('/personne/store', [PersonneController::class,'store']);