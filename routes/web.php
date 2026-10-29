<?php

use App\Http\Controllers\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/mahasiswa');
});

Route::get('/mahasiswa', [Mahasiswa::class, 'index']);
Route::post('/mahasiswa', [Mahasiswa::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [Mahasiswa::class, 'edit']);
Route::put('/mahasiswa/{id}', [Mahasiswa::class, 'update']);
Route::delete('/mahasiswa/{id}', [Mahasiswa::class, 'destroy']);