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
});

require __DIR__ . '/settings.php';
