<?php

use App\Http\Controllers\AbcController;
use App\Http\Controllers\NewregisterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);
Route::post('/studentcreate', [StudentController::class, 'haal']);
Route::get('/view', [StudentController::class, 'viewing']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);

Route::get('register', [RegisterController::class, 'register']);
Route::post('registerInsert', [RegisterController::class, 'registerInsert']);

Route::get('/newregister', [NewregisterController::class,'show']);
Route::post('/newregister', [NewregisterController::class,'insertregu']);
Route::get('/pageafterregister', [NewregisterController::class, 'regushow']);
Route::get('/newregedit/{id}', [NewregisterController::class, 'updatepage']);
Route::put('/newregedit-updated/{id}', [NewregisterController::class, 'inserteditdata']);
// Route::get('/newregdelete/{id}', [NewregisterController::class, 'softdeletedata']);

Route::get('/deletedfilespage', [NewregisterController::class, 'showdeleted']);
Route::get('/newregdelete/{id}', [NewregisterController::class, 'softdeletedata']);
Route::get('/deletedata/{id}', [NewregisterController::class, 'deletedata']);
Route::get('/regrestore/{id}', [NewregisterController::class, 'regrestore']);
Route::get('/regrestoreAll', [NewregisterController::class, 'regrestoreAll']);



Route::resource('task',AbcController::class);