<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\NotifController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::controller(LoginController::class)->group(function(){
    Route::get('/','index')->name('login');
    Route::post('login-proses','proses')->name('login.proses');
    Route::get('logout','logout')->name('logout');
});

Route::resource('/barang', MasterDataController::class);

Route::middleware('auth')->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        // Route::get('/dashboard','index');
        Route::get('/dashboard','CountDashboard')->name('dashboard.index');
    });


    
    Route::controller(MasterDataController::class)->group(function(){
        Route::get('/masterbarang','index')->name('master.barang');
        Route::post('/masterbarang/tambah','tambahData')->name('barang.tambah');
        Route::get('/masterbarang/hapus/{id}','hapusDataBarang')->name('barang.hapus');
    //     Route::resource('/Barangs');

        Route::get('/supplier','dataSupplier')->name('master.supplier');
        Route::get('/users','dataUser')->name('master.user');
        
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
