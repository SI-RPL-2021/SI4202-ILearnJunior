<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InputNilaiController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\DailyReportController;
use App\Http\Controllers\Client\ViewMateriController;
use App\Http\Controllers\Client\TugasController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReplyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Management Kelas
Route::get('/index_kelas', [KelasController::class, 'index']); //list
Route::get('/tambah_kelas', [KelasController::class, 'create'])->name('tambah_kelas'); //halaman tambah
Route::post('/data_kelas', [KelasController::class, 'simpan'])->name('kelas_data'); // store
Route::get('/edit_kelas/{Kelas:id}', [KelasController::class, 'edit']); // halaman edit
Route::post('/edit_store/{Kelas:id}', [KelasController::class, 'update']); // store edit
Route::get('/delete_kelas/{Kelas:id}', [KelasController::class, 'destroy']); // delete

//Management materi video
Route::get('/tambah_materi_video', [VideoController::class, 'create'])->name('addvideo');
Route::post('/store_video', [VideoController::class, 'store'])->name('storevideo');
Route::get('/video', [VideoController::class, 'index']);
Route::get('/editvideo/{Video:id}', [VideoController::class, 'edit']);
Route::post('/updatevideo/{Video:id}', [VideoController::class, 'update']);
Route::get('/delete/{Video:id}', [VideoController::class, 'destroy']);

//Management materi
Route::get('/materi', [MateriController::class, 'create'])->name('tambah_materi');
Route::get('/listmateri', [MateriController::class, 'index'])->name('listmateri');
Route::post('/storemateri', [MateriController::class, 'store'])->name('data_materi');
Route::get('/detailmateri/{mat:id}', [MateriController::class, 'show'])->name('detailmateri');
Route::get('/editmateri/{mat:id}', [MateriController::class, 'edit']);
Route::post('/updatemateri/{mat:id}', [MateriController::class, 'update']);
Route::get('/deletemateri/{mat:id}', [MateriController::class, 'destroy']);

//Management blog
Route::get('/tambah', [BlogController::class, 'create'])->name('tambah_blog');
Route::post('/store_blog', [BlogController::class, 'store'])->name('store_blog');
Route::get('/postblog', [BlogController::class, 'index'])->name('listblog');
Route::get('/detail_blog/{Blog:id}', [BlogController::class, 'show']);
Route::get('/edit_blog/{Blog:id}', [BlogController::class, 'edit']);
Route::post('/update_blog/{Blog:id}', [BlogController::class, 'update']);
Route::get('/delete_blog/{Blog:id}', [BlogController::class, 'destroy']);

//Input Nilai
Route::get('/index', [InputNilaiController::class, 'index']);
Route::get('/input_nilai', [InputNilaiController::class, 'create'])->name('input_nilai');
Route::post('/index_nilai', [InputNilaiController::class, 'store']);

// Routing Client
Route::get('/home', [IndexController::class, 'index']);

//Pengumpulan tugas Route
Route::get('/upload', [TugasController::class, 'index']);
Route::post('/upload', [TugasController::class, 'upload'])->name('upload.post');
Route::get('/list', [TugasController::class, 'listtugas'])->name('list_tugas');
//view materi
Route::get('/view_materi', [ViewMateriController::class, 'index']);
Route::get('/detail_materi/{mat:id}', [ViewMateriController::class, 'detail']);

//Tampilan Nilai User
Route::get('/TampilanNilai', [InputNilaiController::class, 'Tampilan']);

//Feedback Route
Route::get('/feedback', [FeedbackController::class, 'index']);
Route::post('/feedbackstore', [FeedbackController::class, 'store'])->name('store');
Route::get('/listfeed', [FeedbackController::class, 'show']);


//Tampilan Forum
Route::get('/forumindex', [ForumController::class, 'index'])->name('indexforum');
Route::get('/forumcreate', [ForumController::class, 'create'])->name('createforum');
Route::get('/forumshow/{Forum:id}', [ForumController::class, 'show'])->name('showforum');
Route::get('/forumedit/{Forum:id}', [ForumController::class, 'edit'])->name('editforum');
Route::post('/updateforum/{Forum:id}', [ForumController::class, 'update'])->name('updateforum');
Route::get('/deleteforum/{Forum:id}', [ForumController::class, 'destroy'])->name('deleteforum');
Route::POST('/forumpost', [ForumController::class, 'store'])->name('storeforum');
Route::POST('/comment', [ReplyController::class, 'store'])->name('storecomment');

//Tampil Kelas
Route::get('/tampilkelas', [KelasController::class, 'indexcl'])->name('clientkelas');
//User Route

Route::get('/indexuser', [UserController::class, 'index'])->name('listuser');
Route::get('/edituser/{User:id}', [UserController::class, 'edit'])->name('edituser');
Route::post('/storeupdate/{User:id}', [UserController::class, 'update'])->name('updateuser');
Route::get('/deleteuser/{User:id}', [UserController::class, 'destroy'])->name('deleteuser');
//Daily Report
Route::get('/DailyReport', [DailyReportController::class, 'create']);
Route::get('/DailyReportView', [DailyReportController::class, 'index'])->name('DailyIndex');
Route::POST('/DailyReportPost', [DailyReportController::class, 'store'])->name('storedailyreport');
