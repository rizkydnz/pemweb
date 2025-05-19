<?php

use App\Livewire\ShowHomePage;
use App\Livewire\ShowTransaksi;
use App\Livewire\ShowPelanggan;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/beranda', ShowHomePage::class)->name('beranda');
Route::get('/transaksi', ShowTransaksi::class)->name('transaksi');
