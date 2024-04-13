<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/site/{id}', [SiteController::class, 'site']);

Route::get('/pages', [PagesController::class, 'apiIndex']);
Route::get('/pages/{id}', [PagesController::class, 'apiView']);

Route::get('/contacts', [MessageController::class, 'index']);
Route::post('/quote', [MessageController::class, 'sendMessage']);