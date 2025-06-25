<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'web.home')->name('home');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
