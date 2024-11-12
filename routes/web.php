<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\RouteController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WasteCollectionController;

Route::resource('waste-collections', WasteCollectionController::class);
Route::resource('routes', RouteController::class);
Route::resource('vehicles', VehicleController::class);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


// Route::get('/', function () {
//     return view('welcome');
// });
