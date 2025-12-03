<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('list-user', function () {
        return Inertia::render('admin/ListUser');
    })->name('listuser');

    Route::get('add-user',function(){
        return Inertia::render('admin/TambahUser');
    })->name('add-user');

    Route::get('add-member',function(){
        return Inertia::render('operator/TambahAnggota');
    })->name('add-member');

    Route::get('cari-member',function(){
        return Inertia::render('operator/CariAnggota');
    })->name('cari-member');

    Route::get('pinjam-koleksi',function(){
        return Inertia::render('operator/PeminjamanKoleksi');
    })->name('pinjam-koleksi');

     Route::get('return-koleksi',function(){
        return Inertia::render('operator/PengembalianKoleksi');
    })->name('return-koleksi');

    Route::get('add-koleksi',function(){
        return Inertia::render('operator/TambahKoleksi');
    })->name('add-koleksi');
});

require __DIR__ . '/settings.php';
