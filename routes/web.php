
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

//Route::get('/index',[PersonneController::class,'create'])->name('index');

Route::get('/structure', [StructureController::class,'index']);
Route::post('/Structure/store', [StructureController::class,'store']);

Route::get('/personne', [PersonneController::class,'index'])->name('personne.index');
Route::post('/personne/store', [PersonneController::class,'store'])->name('personne.add');
Route::get('/personne/liste',[PersonneController::class,'create'])->name('personne.liste');
Route::get('/personne/edit-{data}', [PersonneController::class, 'edit'])->name('personne.edit');
Route::post('/personne/update-{data}', [PersonneController::class, 'update'])->name('personne.update');
Route::get('/personne/delete-{data}', [PersonneController::class, 'destroy'])->name('personne.delete');
