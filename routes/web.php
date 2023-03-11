<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

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

Route::get('/', [MainPageController::class, 'SendData']);

Route::get('AddData', [MainPageController::class, 'SendInfo']);

Route::post('NewData', [MainPageController::class, 'NewData']);

Route::put('UpdateData/{id}', [MainPageController::class, 'UpdateData']);

Route::get('UpdatePage/{id}', [MainPageController::class, 'UpdatePage']);

Route::delete('DeleteData/{id}', [MainPageController::class, 'DeleteData']);