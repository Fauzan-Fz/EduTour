<?php

use Illuminate\Support\Facades\Route;

// Pertahankan nama route karena navigasi dan footer membuat URL dari nama ini.
Route::view('/', 'welcome')->name('home');

Route::view('/destinasi', 'destinations.index')->name('destinations.index');

Route::view('/destinasi/kampung-jamur-eduwisata', 'destinations.show')->name('destinations.show');
Route::redirect('/destinasi/detail', '/destinasi/kampung-jamur-eduwisata');

Route::view('/cara-kerja', 'how-it-works')->name('how-it-works');
