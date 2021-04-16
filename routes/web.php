<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use App\Models\Blog;
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

Route::get('/admin', [AdminController::class, 'index']);


//Management materi video
Route::get('/tambah_materi_video', [VideoController::class, 'create'])->name('addvideo');
Route::post('/store_video', [VideoController::class, 'store'])->name('storevideo');
Route::get('/video', [VideoController::class, 'index']);
Route::get('/editvideo/{Video:id}', [VideoController::class, 'edit']);
Route::post('/updatevideo/{Video:id}', [VideoController::class, 'update']);
Route::get('/delete/{Video:id}', [VideoController::class, 'destroy']);


//Management blog
Route::get('/tambah', [BlogController::class, 'create'])->name('tambah_blog');
Route::post('/store_blog', [BlogController::class, 'store'])->name('store_blog');
Route::get('/postblog', [BlogController::class, 'index'])->name('listblog');
Route::get('/detail_blog/{Blog:id}', [BlogController::class, 'show']);
Route::get('/edit_blog/{Blog:id}', [BlogController::class, 'edit']);
Route::post('/update_blog/{Blog:id}', [BlogController::class, 'update']);
Route::get('/delete_blog/{Blog:id}', [BlogController::class, 'destroy']);
