<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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



Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);




Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
Route::get('/', function () {

    return view('admin.page.index', );
})->name('admin.dashboard');

Route::resource('beritas', BeritaController::class);
Route::resource('kategoripelatihans', KategoriPelatihanController::class);
Route::resource('pelatihans', PelatihanController::class);

Route::resource('kategorilowongans', KategoriLowonganController::class);
Route::resource('lowongans', LowonganController::class);

});

