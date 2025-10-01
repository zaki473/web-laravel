<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haiController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\TagController;

Route::get('/hai',[haiController::class,'index']);
Route::get('/kategori-buku',[KategoriBukuController::class,'index']);
Route::get('/kategori-buku/tambah',[KategoriBukuController::class,'create']);
Route::post('/kategori-buku',[KategoriBukuController::class,'store']);
Route::get('/kategori-buku/{id}/edit', [KategoriBukuController::class,'edit']);
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
Route::get('/tag.{id}.edit', [TagController::class,'edit']);
Route::put('/tag.{id}', [TagController::class,'update']);
Route::delete('/tag.{id}', [TagController::class,'destroy']);

