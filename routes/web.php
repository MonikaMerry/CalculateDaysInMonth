<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculateDaysController;

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

Route::get('/', [CalculateDaysController::class,'viewPage']);

Route::post('enter-month',[CalculateDaysController::class,'calculateLogic']);
