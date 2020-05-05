<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('movies.index');
Route::view('/movies', 'show');

