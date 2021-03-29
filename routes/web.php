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
Route::get('/listmateri', [MateriController::class , 'index']);
Route::post('/storemateri', [MateriController::class , 'store'])->name('data_materi');
Route::post('/detailmateri', [MateriController::class , 'detail'])->name('detail_materi');
