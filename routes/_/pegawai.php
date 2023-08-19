<?php

use App\Http\Controllers\Pegawai\Pengajuan\CutiSakitController;
use App\Http\Controllers\Pegawai\Pengajuan\CutiHamilController;
use App\Http\Controllers\Pegawai\Pengajuan\CutiTahunanController;
use App\Http\Controllers\Pegawai\Pengajuan\CutiAlasanPentingController;
use App\Http\Controllers\Pegawai\Pengajuan\CutiSakitControllerController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'pegawai/pengajuan/cuti-sakit');
Route::resource('pengajuan/cuti-sakit', CutiSakitController::class);
Route::resource('pengajuan/cuti-hamil', CutiHamilController::class);
Route::resource('pengajuan/cuti-alasanpenting', CutiAlasanPentingController::class);
Route::resource('pengajuan/cuti-tahunan', CutiTahunanController::class);

