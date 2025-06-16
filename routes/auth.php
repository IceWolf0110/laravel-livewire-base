<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('/login', 'auth.login');
});

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Volt::route('/dashboard', 'admin.dashboard')->name('admin.dashboard');
});
