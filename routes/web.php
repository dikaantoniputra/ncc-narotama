<?php

use App\Models\Admin;
use App\Models\Berita;
use App\Models\Lamaran;
use App\Models\Peserta;
use App\Models\Lowongan;
use App\Models\Mahasiswa;
use App\Models\Pelatihan;
use App\Models\KategoriLowongan;
use App\Models\KategoriPelatihan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MahasiswaController;
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
Route::get('/berita', [BeritaController::class, 'news'])->name('user.page.news'); 
Route::get('/berita/detail/{id}', [BeritaController::class, 'detailNews'])->name('user.page.detailNews');

/* Pelatihan */
Route::get('/pelatihan', [PelatihanController::class, 'course'])->name('user.page.course'); 
Route::get('/pelatihan/detail/{id}', [PelatihanController::class, 'detailCourse'])->name('user.page.detailCourse');
Route::post('/pelatihan/daftar', [PelatihanController::class, 'registerCourse'])->name('registerCourse');


Route::get('/lowongan', [LowonganController::class, 'vacancy'])->name('user.page.vacancy'); 
Route::get('/lowongan/detail/{id}', [LowonganController::class, 'detailVacancy'])->name('user.page.detailVacancy');
Route::post('/lowongan/detail/daftar', [LowonganController::class, 'storeApplication'])->name('user.storeApplication');


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

/* Akun Mahasiswa */


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {

Route::get('/dashboard', function () {

    $admin = Admin::count();
    $mahasiswa = Mahasiswa::count();
    $berita = Berita::count();
    $kategorilowongan = KategoriLowongan::count();
    $kategoripelatihan = KategoriPelatihan::count();
    $lowongan = Lowongan::count();
    $pelatihan = Pelatihan::count();
    $lamaran = Lamaran::count();
    $peserta = Peserta::count();

    return view('admin.page.index', compact('admin','mahasiswa','berita','kategorilowongan','kategoripelatihan','lowongan','pelatihan','lamaran','peserta') );
})->name('admin.dashboard');

Route::get('/profile', [AdminController::class, 'profile']);
Route::put('/profile', [AdminController::class, 'profileupdate'])->name('profile.update');

Route::get('/profile/password', [AdminController::class, 'showPasswordForm'])->name('profile.password');
Route::put('/profile/password', [AdminController::class, 'updatePassword'])->name('profile.updatePassword');

Route::get('/admin',  [AdminController::class, 'index'])->name('admin.index');
Route::resource('admin', AdminController::class);

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('beritas', BeritaController::class);
Route::resource('kategoripelatihans', KategoriPelatihanController::class);
Route::resource('pelatihans', PelatihanController::class);
Route::resource('kategorilowongans', KategoriLowonganController::class);
Route::resource('lowongans', LowonganController::class);

Route::resource('lamaran', LamaranController::class);
Route::resource('peserta', PesertaController::class);
Route::get('/download/documents/{id}', [LamaranController::class, 'downloadDocuments'])->name('download.documents');


});

