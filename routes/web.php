<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PHPMailerController;

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


Route::get('/contents', function () {
    return view('pages/contents');
})->middleware(['auth', 'verified'])->name('contents');

Route::get('/', function () {
    return view('pages/welcome');
})->name('welcome');

Route::get('/welcome', function () {
    return view('pages/welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {    
    Route::get('/welcome', [SiteController::class, 'dashboard'])->name('dashboard');
    Route::get('/site', [SiteController::class, 'index'])->name('site');
    Route::post('/site/update', [SiteController::class, 'update'])->name('site.update');
    Route::get('/pages', [PagesController::class, 'index'])->name('pages');
    Route::get('/pages/create', [PagesController::class, 'create'])->name('create.page');
    Route::post('/pages/created', [PagesController::class, 'created'])->name('created.page');
    Route::get('/pages/edit/{id}', [PagesController::class, 'edit'])->name('edit.page');
    Route::post('/pages/update', [PagesController::class, 'update'])->name('update.page');
    Route::get('/contents', [ContentController::class, 'index'])->name('contents');
    Route::get('/contents/create', [ContentController::class, 'create'])->name('create.content');
    Route::post('/contents/created', [ContentController::class, 'created'])->name('created.content');
    Route::get('/contents/edit/{id}', [ContentController::class, 'edit'])->name('edit.content');
    Route::post('/contents/update', [ContentController::class, 'update'])->name('update.content');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/sendemail', [PHPMailerController::class, 'email'])->name('email');
    Route::post('/send-email', [PHPMailerController::class, 'composeEmail'])->name('composeEmail');

    Route::get('/clearcache', [SiteController::class, 'clearcc'])->name('clearcc');    

});


require __DIR__.'/auth.php';
