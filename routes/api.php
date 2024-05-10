<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ContentController;
use PharIo\Manifest\Email;

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

Route::get('/content', [ContentController::class, 'apiIndex']);
Route::get('/content/{id}', [ContentController::class, 'apiView']);

Route::get('/contacts', [MessageController::class, 'index']);
Route::post('/quote', [MessageController::class, 'sendMessage']);

/*** Email backup **/
Route::post('/send-message-mate', [EmailController::class, 'sendEmailMate']);
Route::post('/message', [MessageController::class, 'message']);
Route::get('/message/list', [MessageController::class, 'mlist']);
Route::post('/sendemail', [EmailController::class, 'sendEmail']);