<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\KasusController;

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

Route::get('/', function () {
    return view('dashboard.index');
});

// Route FrontEnd
use App\Http\Controllers\DashboardController;
Route::resource('/', DashboardController::class);

Auth::routes(['register' => false]);
Route::group(['prefix' => 'beranda', 'midlleware' => ['auth']], function () {
    Route::get('/',[App\Http\Controllers\BerandaController::class,'index'])->name('beranda');

Route::resource('provinsi',ProvinsiController::class);

Route::resource('kota',KotaController::class);

Route::resource('kecamatan',KecamatanController::class);

Route::resource('kelurahan',KelurahanController::class);

Route::resource('rw',RwController::class);

Route::resource('tracking',TrackingController::class);

Route::resource('negara',NegaraController::class);

Route::resource('kasus',KasusController::class);

Route::get('report-provinsi', [ReportController::class, 'getReportProvinsi']);
Route::post('report-provinsi', [ReportController::class, 'ReportProvinsi']);
Route::get('pdfreport', [ReportController::class, 'Report'])->name('pdfreport')->middleware('auth');

});