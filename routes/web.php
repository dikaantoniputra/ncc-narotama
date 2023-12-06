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
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PesertaController;
use App\Models\Pelatihan;

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

/* Pelatihan */
Route::get('/pelatihan', [PelatihanController::class, 'course'])->name('user.page.course'); 
Route::get('/pelatihan/detail/{id}', [PelatihanController::class, 'detailCourse'])->name('user.page.detailCourse');
Route::post('/pelatihan/daftar', [PelatihanController::class, 'registerCourse'])->name('registerCourse');


Route::get('/lowongan', [LowonganController::class, 'vacancy'])->name('user.page.vacancy'); 
Route::get('/lowongan/detail/{id}', [LowonganController::class, 'detailVacancy'])->name('user.page.detailVacancy');
Route::post('/lowongan/detail/daftar', [LamaranController::class, 'storeApplication'])->name('user.storeApplication');


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

/* Akun Mahasiswa */
Route::resource('akun', MahasiswaController::class);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
Route::get('/dashboard', function () {
    return view('admin.page.index', ["title" => "Dashboard Admin"] );
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

