<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfilPageController;
use Illuminate\Support\Facades\Route;

Route::get ("/", [LandingPageController::class, "index"]);

Route::get ("/profil/", [ProfilPageController::class, "index"]);