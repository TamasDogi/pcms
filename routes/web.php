<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages/welcome');
    });
});

Route::get('/contents', function () {
    return view('pages/contents');
})->middleware(['auth', 'verified'])->name('contents');

Route::get('/dashboard', function () {
    return view('pages/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/site', [SiteController::class, 'index'])->name('site');
    Route::post('/site/update', [SiteController::class, 'update'])->name('site.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/pages', [PagesController::class, 'index'])->name('pages');
    Route::get('/pages/create', [PagesController::class, 'create'])->name('create.page');
    Route::post('/pages/created', [PagesController::class, 'created'])->name('create.page');
    Route::get('/pages/edit/{id}', [PagesController::class, 'edit'])->name('edit.page');
    Route::post('/pages/update', [PagesController::class, 'update'])->name('update.page');
});

Route::middleware('auth')->group(function () {
    Route::get('/contents', [ContentController::class, 'index'])->name('contents');
    Route::get('/contents/create', [ContentController::class, 'create'])->name('create.content');
    Route::post('/contents/created', [ContentController::class, 'created'])->name('create.content');
    Route::get('/contents/edit/{id}', [ContentController::class, 'edit'])->name('edit.content');
    Route::post('/contents/update', [ContentController::class, 'update'])->name('update.content');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
