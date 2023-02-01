<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\csvController;

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

Route::get('/', [viewController::class,'welcome']);

Route::get('/headers', [csvController::class,'process']);

Route::get('/main', [viewController::class,'main']);

Route::get('/registration', [viewController::class,'registration']);
Route::get('/bemutatkozas', [viewController::class,'bemutatkozas']);
Route::get('/soforoknek', [viewController::class,'soforoknek']);
Route::get('/utasoknak', [viewController::class,'utasoknak']);
Route::get('/bejelentkezes', [viewController::class,'bejelentkezes']);
