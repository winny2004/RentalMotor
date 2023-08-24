<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MotorbikeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AuthenticateController;
/*use App\Http\Controllers\AuthenticateController;
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
    return view('layouts.app');
});
Route::get('/motorbikes', [MotorbikeController::class, 'motorbikesIndex'])->name('motorbikes');
Route::resource('/motorbikes', MotorbikeController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/colors', ColorController::class);
Route::resource('/owners', OwnerController::class);
Route::get('login', [AuthenticateController::class, 'loginIndex'])->name('login');

Route::post('login', [AuthenticateController::class, 'login']);

Route::get('register', [AuthenticateController::class, 'registerIndex'])->name('register');

Route::post('register', [AuthenticateController::class, 'register']);

Route::get('logout', [AuthenticateController::class, 'logout'])->name('logout');