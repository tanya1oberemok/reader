<?php

use App\Http\Controllers\Admins\BookController;
use App\Http\Controllers\Admins\HeroController;
use App\Http\Controllers\Admins\PublishingOfficeController;
use App\Http\Controllers\Admins\SchoolClassController;
use App\Http\Controllers\Admins\SchoolController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Teachers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['teacher'])->group(function () {
    Route::get('/profile', [TeacherController::class, 'index']);
});

Route::middleware(['admin'])->group(function () {
    Route::get('/books', [BookController::class, 'index']);
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{book}', [BookController::class, 'update']);
    Route::delete('/books/{book}', [BookController::class, 'delete']);

    Route::get('/schools', [SchoolController::class, 'index']);
    Route::post('/schools', [SchoolController::class, 'store']);
    Route::put('/schools/{school}', [SchoolController::class, 'update']);
    Route::delete('/schools/{school}', [SchoolController::class, 'delete']);

    Route::get('/school-classes', [SchoolClassController::class, 'index']);
    Route::post('/schools-classes', [SchoolClassController::class, 'store']);
    Route::put('/schools-classes/{class}', [SchoolClassController::class, 'update']);
    Route::delete('/schools-classes/{class}', [SchoolClassController::class, 'delete']);

    Route::get('/heroes', [HeroController::class, 'index']);
    Route::post('/heroes', [HeroController::class, 'store']);
    Route::put('/heroes/{hero}', [HeroController::class, 'update']);
    Route::delete('/heroes/{hero}', [HeroController::class, 'delete']);

    Route::get('/publishing-offices', [PublishingOfficeController::class, 'index']);
    Route::post('/publishing-offices', [PublishingOfficeController::class, 'store']);
    Route::put('/publishing-offices/{publishingOffice}', [PublishingOfficeController::class, 'update']);
    Route::delete('/publishing-offices/{publishingOffice}', [PublishingOfficeController::class, 'delete']);

});
