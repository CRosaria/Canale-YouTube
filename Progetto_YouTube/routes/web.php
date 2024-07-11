<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

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

//Route::get('/homepage', function () {
//    return view('home');
//})->name('homepage');

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/concat', function () {
    return view('contatti');
})->name('video.concat');

Route::get('/videos', [VideoController::class,'index'])->name('videos.videoindex');

Route::get('/videos/{video}', [VideoController::class,'show'])->name('videos.showvideo');

Route::get('/playlists', function () {
    return view('playlist');
})->name('playlists');;

// adimin
Route::get('/admin/lista-video',[VideoController::class,'index_admin'])->name('admin.video.indexadmin');

Route::get('/admin/create-video',[VideoController::class,'create'])->name('admin.video.create');

Route::post('/admin/video-store',[VideoController::class,'store'])->name('admin.video.store');

Route::get('/admin/modifica-video/{video}',[VideoController::class,'edit'])->name('admin.video.edit');

Route::put('/admin/video/{video}',[VideoController::class,'update'])->name('admin.video.update');

Route::delete('/admin/video/delite/{video}',[VideoController::class,'destroy'])->name('admin.video.destroy');

Route::get('/contact', function () {
    return view('contact');
    })->name('email');

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('sendEmail');
