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
Route::get('/pkm-upi-pwk', [VirtualController::class,'pkmUPIpwk']);
Route::get('/rk-mkb', [VirtualController::class,'RuangPerkuliahanMKB']);
Route::get('/altim', [VirtualController::class,'AulaTimur']);
Route::get('/gazebo', [VirtualController::class,'Gazebo']);
Route::get('/labkom-psti', [VirtualController::class,'LABKOMPSTI']);

// Pembatas