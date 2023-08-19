<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mahasiswa\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('pegawai');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginProcess', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('check-role',[AuthController::class, 'checkRole']);

Route::middleware('auth')
->group(function(){
    Route::prefix('admin')
    ->middleware('can:sipeti-admin')
    ->group(function(){
        include "_/admin.php";
    });
    Route::prefix('pegawai')
    ->middleware('can:pegawai')
    ->group(function(){
        include "_/pegawai.php";
    });
    // Route::prefix('pegawai')->group(function() {
    //     include "_/pegawai.php";
    // });
});



