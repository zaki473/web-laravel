<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\haiController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/hai', [haiController::class, 'index']);
Route::get('/kategori-buku', [KategoriBukuController::class, 'index']);
Route::get('/kategori-buku/tambah', [KategoriBukuController::class, 'create']);
Route::post('/kategori-buku', [KategoriBukuController::class, 'store']);
Route::get('/kategori-buku/{id}/edit', [KategoriBukuController::class, 'edit']);
Route::put('/kategori-buku/{id}', [KategoriBukuController::class, 'update']);
Route::delete('/kategori-buku/{id}', [KategoriBukuController::class, 'destroy']);
Route::get('/penerbit', [PenerbitController::class, 'index']);
Route::get('/penerbit.tambah', [PenerbitController::class, 'create']);
Route::post('/penerbit', [PenerbitController::class, 'store']);
Route::get('/penerbit.{id}.edit', [PenerbitController::class, 'edit']);
Route::put('/penerbit.{id}', [PenerbitController::class, 'update']);
Route::delete('/penerbit.{id}', [PenerbitController::class, 'destroy']);

Route::get('/tag', [TagController::class, 'index']);
Route::post('/tag', [TagController::class, 'store']);
Route::get('/tag.tambah', [TagController::class, 'create']);
Route::get('/tag.{id}.edit', [TagController::class, 'edit']);
Route::put('/tag.{id}', [TagController::class, 'update']);
Route::delete('/tag.{id}', [TagController::class, 'destroy']);

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku.create', [BukuController::class, 'create']);
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/buku.{id}.edit', [BukuController::class, 'edit']);
Route::put('/buku.{id}', [BukuController::class, 'update']);
Route::delete('/buku.{id}', [BukuController::class, 'destroy']);
Route::get('/user', [UserController::class, 'index'])
    ->name('user');
Route::get('/user.create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user.cari', [UserController::class, 'search']);
Route::get('/user.{id}.edit', [UserController::class, 'edit']);
Route::put('/user.{id}', [UserController::class, 'update']);
Route::get('/user.{id}', [UserController::class, 'show']);
Route::delete('/user.{id}', [UserController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'showloginform'])
->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
->name('logout');
Route::middleware('auth')->get('/profil', [AuthController::class,
'showProfil'])->name('profil');
