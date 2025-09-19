<?php

use App\Http\Controllers\UserController;
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
    return view('logBin', [
        'title' => 'Login',
    ]);
});

Route::get('/Siswa', function () {
    return view('siswadash', [
        'title' => 'Siswa',
    ]);
});

Route::get('/Guru', function () {
    return view('gurudash', [
        'title' => 'Guru',
    ]);
});

Route::get('/Penilaian', function () {
    return view('gurutugas', [
        'title' => 'Penilaian',
    ]);
});

Route::get('/Tugas', function () {
    return view('siswatugas', [
        'title' => 'Tugas',
    ]);
});

Route::resource('users', UserController::class);
