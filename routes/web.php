<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\KategoriLowonganController;
use App\Http\Controllers\KategoriPelatihanController;

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

Route::get('/', [LandingController::class, 'home'])->name('user.page.home'); 
Route::get('/berita', [LandingController::class, 'news'])->name('user.page.news'); 
Route::get('/berita/detail', [LandingController::class, 'detailNews'])->name('user.page.detailNews');  
Route::get('/pelatihan', [LandingController::class, 'course'])->name('user.page.course'); 
Route::get('/pelatihan/detail', [LandingController::class, 'detailCourse'])->name('user.page.detailCourse');  
Route::get('/lowongan', [LandingController::class, 'vacancy'])->name('user.page.vacancy'); 
Route::get('/lowongan/detail', [LandingController::class, 'detailVacancy'])->name('user.page.detailVacancy'); 


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);




Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
Route::get('/', function () {
    return view('admin.page.index', );
})->name('admin.dashboard');

Route::get('/profile', [AdminController::class, 'profile']);
Route::put('/profile', [AdminController::class, 'profileupdate'])->name('profile.update');

Route::get('/profile/password', [AdminController::class, 'showPasswordForm'])->name('profile.password');
Route::put('/profile/password', [AdminController::class, 'updatePassword'])->name('profile.updatePassword');

Route::resource('beritas', BeritaController::class);
Route::resource('kategoripelatihans', KategoriPelatihanController::class);
Route::resource('pelatihans', PelatihanController::class);

Route::resource('kategorilowongans', KategoriLowonganController::class);
Route::resource('lowongans', LowonganController::class);

});

