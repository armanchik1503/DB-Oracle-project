<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\CrudController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/import', [ImportController::class, 'index'])->name('import');

Route::post('/import', [ImportController::class, 'load'])->name('load');

Route::get('/', [ProfessionController::class, 'all'])->name('main');

Route::get('/universities', [UniversityController::class, 'show'])->name('univ');

Route::post('/send', [AjaxController::class, 'index'])->name('ajax');
//Route::get('/send/{id}', [AjaxController::class, 'index'])->name('ajax');

Route::post('/send-info', [InfoController::class, 'index'])->name('sendInfo');

Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');

Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');

Route::get('/crud/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');

Route::put('/crud/update/{id}', [CrudController::class, 'update'])->name('crud.update');

Route::get('/crud/delete/{id}', [CrudController::class, 'destroy'])->name('crud.delete');


//Route::resource('crud', [CrudController::class]);

