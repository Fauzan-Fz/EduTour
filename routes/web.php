<?php

use Illuminate\Support\Facades\Route;

// Pertahankan nama route karena navigasi dan footer membuat URL dari nama ini.
Route::view('/', 'welcome')->name('home');

Route::view('/destinasi', 'destinations.index')->name('destinations.index');
