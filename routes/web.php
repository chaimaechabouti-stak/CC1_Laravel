<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;


Route::resource('/', EvenementController::class);
