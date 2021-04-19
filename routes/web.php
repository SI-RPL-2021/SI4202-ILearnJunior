<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MateriController;
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

Route::get('/tambah', [BlogController::class , 'create'])->name('tambah_blog');
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/materi', [MateriController::class , 'create'])->name('tambah_materi');
Route::get('/listmateri', [MateriController::class , 'index'])->name('listmateri');
Route::post('/storemateri', [MateriController::class , 'store'])->name('data_materi');
Route::get('/detailmateri/{mat:id}', [MateriController::class, 'show'])->name('detailmateri');
Route::get('/editmateri/{mat:id}', [MateriController::class, 'edit']);
Route::post('/updatemateri/{mat:id}', [MateriController::class, 'update']);
Route::get('/deletemateri/{mat:id}', [MateriController::class, 'destroy']);
