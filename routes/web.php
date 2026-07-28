<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('berita', dashboardController::class);
