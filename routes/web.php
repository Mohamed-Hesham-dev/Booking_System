<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\RoomController;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/hotel/{id}', [App\Http\Controllers\BranchController::class, 'index']);
Route::get('/branch/{id}', [App\Http\Controllers\RoomController::class, 'index']);
Route::post('/checkroom', [App\Http\Controllers\RoomController::class, 'checkroom']);


Route::post('/checkout', [App\Http\Controllers\CheckOutController::class, 'index']);



