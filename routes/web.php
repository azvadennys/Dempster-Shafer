<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DataBasisPengetahuanController;
use App\Http\Controllers\Backend\DataGejalaController;
use App\Http\Controllers\Backend\DataPenyakitController;
use App\Http\Controllers\Backend\DataRiwayatController;
use App\Http\Controllers\Frontend\DiagnosaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PedomanController;
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

// Route::middleware('guest')->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('login');
Route::get('diagnosa', [DiagnosaController::class, 'index2'])->name('diagnosa');
// Route::get('diagnosa2', [DiagnosaController::class, 'index']);
Route::get('diagnosa/{data_diagnosa}', [DiagnosaController::class, 'showdata']);
Route::get('pedoman', [PedomanController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('registrasi', [LoginController::class, 'prosesregistrasi'])->name('registrasi.proses');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('diagnosa', [DiagnosaController::class, 'kalkulator']);
Route::post('cekDataBerikutnya', [DiagnosaController::class, 'cekDataBerikutnya'])->name('cekDataBerikutnya');
// });

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('data-riwayat', [DataRiwayatController::class, 'index'])->name('data.riwayat');
    Route::get('data-riwayat/{id_diagnosa}', [DataRiwayatController::class, 'showdata']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::delete('data-riwayat/{id_diagnosa}', [DataRiwayatController::class, 'destroy']);
    Route::resource('data-penyakit', DataPenyakitController::class)->except('show');
    Route::resource('data-gejala', DataGejalaController::class)->except('show');
    Route::resource('data-basis-pengetahuan', DataBasisPengetahuanController::class)->except('show');
});
