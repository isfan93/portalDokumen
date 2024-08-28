<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\RegnasController;
use App\Http\Controllers\RegulasiptController;
use App\Http\Controllers\UnitController;
use App\Models\Regnas;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::controller(LoginController::class)->group(function(){
    Route::get('/','index')->name('login');
    Route::post('login-proses','proses')->name('login.proses');
    Route::get('logout','logout')->name('logout');
});

Route::middleware('auth')->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        // Route::get('/dashboard','index');
        Route::get('/dashboard','CountDashboard')->name('dashboard.index');
    });

    Route::controller(RegnasController::class)->group(function(){
        Route::get('/regulasinasional','index')->name('regnas.index');
        Route::get('/regulasinasional/detail/{id}','detail')->name('regnas.detail');
        Route::post('/regulasinasional/tambah','tambahData')->name('regnas.tambah');
        Route::get('/regulasinasional/hapus/{id}','hapusData')->name('regnas.hapus');
    });

    Route::controller(RegulasiptController::class)->group(function(){
        Route::get('/regulasiPT/kebijakan','allDataKebijakan')->name('regulasi.kebijakan');
        Route::get('/regulasiPT/kebijakan/{id}','detailKebijakan')->name('regulasi.detailkb');
        Route::post('/regulasiPT/TambahDataK','tambahDataKebijakan')->name('regulasi.tambahDataKebijakan');
        Route::get('/regulasiPT/hapus/kb/{id}','hapusDataKebijakan')->name('regulasi.hapuskb');
        Route::get('/regulasiPT/Sk','allDataSK')->name('regulasi.sk');
        Route::get('/regulasiPT/sk/{id}', 'detailSK')->name('regulasi.detailsk');
        Route::post('/regulasiPT/tambah/sk','tambahDataSK')->name('regulasi.tambahsk');
        Route::get('/regulasiPT/hapus/{id}','hapusDataSK')->name('regulasi.hapussk');
        Route::get('/regulasiPT/peraturanpt','allDataPeraturan')->name('regulasi.peraturan');
        Route::get('/regulasiPT/peraturan/{id}','detailPeraturan')->name('regulasi.detailper');

        // email
        Route::get('/kirimemail','email');
    });

    Route::controller(NotifController::class)->group(function(){
        Route::get('/pesan','index')->name('notif.pesan');
        Route::get('/pesan/sukses','sukses')->name('notif.sukses');
        Route::get('/pesan/peringatan','peringatan')->name('notif.peringatan');
        Route::get('/pesan/gagal','gagal')->name('notif.gagal');
    });
    
});


// Route::controller(DashboardController::class)->group(function(){
//     Route::get('/dashboard','CountDashboard')->name('data');
//     Route::get('/dashboard/menu','PKRs')->name('data');
// });
