<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfilPageController;
use App\Http\Controllers\DetailJasaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get ("/", [LandingPageController::class, "index"]);

Route::get ("/profil/", [ProfilPageController::class, "index"]);

Route::get('/auth/login', [AuthController::class,"index"]);

Route::get('/auth/register', action: [AuthController::class,"register"]);

Route::get('/detail/', [DetailJasaController::class, "index"]);

