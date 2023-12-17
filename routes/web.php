<?php

use App\Http\Controllers\VirtualController;
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

Route::get('/', [VirtualController::class,'Home']);
Route::get('/home', [VirtualController::class,'GedungPancasila']);
Route::get('/normaal-school', [VirtualController::class,'NormaalSchool']);
Route::get('/lapangan-teater', [VirtualController::class,'LapanganTeaterTerbuka']);
Route::get('/hexapark', [VirtualController::class,'Hexapark']);
Route::get('/masjid-alfurqon', [VirtualController::class,'Masjid']);
Route::get('/perpustakaan', [VirtualController::class,'Perpustakaan']);
Route::get('/albar', [VirtualController::class,'AulaBarat']);
Route::get('/pamdal', [VirtualController::class,'PosPamdal']);
Route::get('/bem-upi-pwk', [VirtualController::class,'BEMUPIPWK']);
Route::get('/pkm-upi-pwk', [VirtualController::class,'PKM']);
Route::get('/rk-mkb', [VirtualController::class,'RKMKB']);
Route::get('/altim', [VirtualController::class,'AulaTimur']);
Route::get('/gazebo', [VirtualController::class,'Gazebo']);
Route::get('/labkom-psti', [VirtualController::class,'Labkom']);

// Pembatas

Route::get('/rk-psti', [VirtualController::class,'RKPSTI']);
Route::get('/gedung-reformasi', [VirtualController::class,'GedungReformasi']);
Route::get('/lobby-reformasi', [VirtualController::class,'LobbyGedungReformasi']);
Route::get('/lobby-pancasila', [VirtualController::class,'LobbyGedungPancasila']);
Route::get('/smartclass', [VirtualController::class,'SmartClass']);
Route::get('/prodi-psti', [VirtualController::class,'RuangProdiPSTI']);
Route::get('/ruang-admin', [VirtualController::class,'RAdmin']);
Route::get('/ruang-dosen', [VirtualController::class,'RuangDosen']);
Route::get('/ruang-microteaching', [VirtualController::class,'RuangMicro']);
Route::get('/lapbola', [VirtualController::class,'LapanganBola']);
Route::get('/lapvolly', [VirtualController::class,'LapanganVolly']);
Route::get('/asrama', [VirtualController::class,'Asrama']);