<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\inbox;
use App\Http\Controllers\KategoriJasaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfilPageController;
use App\Http\Controllers\DetailJasaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LamanJasaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TambahKategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get ("/", [LandingPageController::class, "index"]);



Route::get ("/profil/", [ProfilPageController::class, "index"]);



Route::get('/auth/login', [AuthController::class,"index"]);

Route::post('/auth/login', [AuthController::class, "login"])->name("login.login");



Route::get('/auth/register', action: [AuthController::class,"register"]);

Route::post('/auth/register', action: [AuthController::class,"store"])->name("register.store");



Route::get('/detail/', [DetailJasaController::class, "index"]);



Route::get("/detail/pembayaran", [PembayaranController::class, "index"]);



Route::get('/chat/', [ChatController::class,"chat"]);



Route::get('/lamanjasa', [LamanJasaController::class, "index"]);



Route::get('/inbox',[inbox::class,"index"]);



Route::get('/mail/',[inbox::class,"mail"]);



Route::get('/kategori',[KategoriController::class,"index"]);

Route::delete('/Kategori/{id}', [KategoriController::class, "delete"])->name("kategori.delete");



Route::get('/kategori/edit/{id}', [KategoriController::class, "edit"]);

Route::patch('/kategori/edit/edit/{id}', [KategoriController::class, "update"])->name("kategori.update");



Route::get('/kategori/tambah', [TambahKategoriController::class,"index"]);

Route::post('/kategori/tambah', [TambahKategoriController::class,"store"])->name("kategori.store");



Route::get('/categories', [KategoriJasaController::class, "index"]);