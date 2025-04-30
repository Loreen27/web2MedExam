<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarWarsController;
use App\Http\Controllers\LoginController;

Route::post('/login/api', [LoginController::class, 'login']);

Route::get('/starwars', [StarWarsController::class, 'fetchCharacters']);

