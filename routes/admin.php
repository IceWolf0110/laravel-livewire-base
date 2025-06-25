<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Volt::route('dashboard', 'admin.dashboard')->name('admin.dashboard');
});
