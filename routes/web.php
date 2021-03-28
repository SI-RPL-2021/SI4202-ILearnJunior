<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KelasController;
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
Route::get('/tambah_kelas', [KelasController::class , 'create'])->name('tambah_kelas');
Route::get('/index_kelas', [KelasController::class , 'index']);
Route::post('/data_kelas', [KelasController::class , 'simpan'])->name('kelas_data');
Route::get('/admin', [AdminController::class, 'index']);
