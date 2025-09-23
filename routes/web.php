<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\haiController;
use App\Http\Controllers\KategoriBukuController;


Route::get('/hai',[haiController::class,'index']);
Route::get('/kategori-buku',[KategoriBukuController::class,'index']);
Route::get('/kategori-buku.tambah',[KategoriBukuController::class,'create']);
Route::post('/kategori-buku.data',[KategoriBukuController::class,'store']);
