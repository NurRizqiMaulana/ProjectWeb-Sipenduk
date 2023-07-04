<?php

use Illuminate\Support\Facades\Route;

use App\Models\Subkriteria;
use App\Models\Kriteria;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

use App\Http\Controllers\IndexController;
Route::get('/', [IndexController::class, 'index']);
Route::post('/pesan', [IndexController::class, 'store']);


use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index']);

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\SubkriteriaController;
use App\Http\Controllers\KriteriaController;

Route::resources([
    'alternatives' => AlternativeController::class,
    'kriterias' => KriteriaController::class
    ]);
    
use App\Http\Controllers\DecisionController;
Route::get('decision', [DecisionController::class, 'get_view_normalisasi'])->name('normalisasi');

use App\Http\Controllers\SawController;
Route::get('normalisasi', [SawController::class, 'get_view_normalisasi'])->name('normalisasi');
Route::get('rank', [SawController::class, 'get_view_preferensi'])->name('preferensi');

use App\Http\Controllers\SessionController;
Route::get('/sesi/register', [SessionController::class, 'register'])->name('register');
Route::post('register', [SessionController::class, 'register_action'])->name('register.action');
Route::get('/sesi/login', [SessionController::class, 'login'])->name('login');
Route::post('login', [SessionController::class, 'login_action'])->name('login.action');

#routewithview
// use App\Http\Controllers\NormalisasiController;
// Route::get('normalisasi', [NormalisasiController::class, 'index']);

#routevithview
// use App\Http\Controllers\RankController;
// Route::get('rank', [RankController::class, 'index']);






