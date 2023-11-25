<?php

use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Kelase;
use App\Models\Tentor;
use App\Models\Pelajaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TentorController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BeritaController;
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

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.page.index');

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/siswa/getkelas', [SiswaController::class, 'getKelas'])->name('siswa.getkelas');
    Route::post('/siswa/setstatus', [SiswaController::class, 'changeStatus'])->name('siswa.setstatus');
    Route::resource('siswa', SiswaController::class);


    Route::get('/tentor', [TentorController::class, 'index'])->name('tentor.index');
    Route::post('/tentor/setstatus', [TentorController::class, 'changeStatus'])->name('tentor.setstatus');
    Route::resource('tentor', TentorController::class);

    Route::get('/user', [UserControler::class, 'index'])->name('user.index');
    Route::post('/user/getkelas', [UserControler::class, 'getKelas'])->name('user.getkelas');
    Route::resource('user', UserControler::class);

    Route::get('/download-file/{filename}', [MateriController::class, 'download'])->name('download.file');
    Route::delete('/file/{id}', [MateriController::class, 'delete'])->name('file.delete');

    Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::resource('pendidikan', PendidikanController::class);

    Route::get('/kelase', [KelasController::class, 'index'])->name('kelase.index');
    Route::resource('kelase', KelasController::class);

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    return view('admin.page.index', );
})->name('admin.dashboard');

Route::resource('beritas', BeritaController::class);
Route::resource('kategoripelatihans', KategoriPelatihanController::class);
Route::resource('pelatihans', PelatihanController::class);

Route::resource('kategorilowongans', KategoriLowonganController::class);
Route::resource('lowongans', LowonganController::class);

});

