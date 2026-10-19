<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\QuestionController;

use App\http\controllers\DashboardController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa/{param1}', [App\Http\Controllers\MahasiswaController::class, 'show']);

route::get('/home', [HomeController::class, 'index']);

route::get('dashboard',[DashboardController::class, 'index'])
    ->name('dashboard');