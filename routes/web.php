<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('/fields',\App\Http\Controllers\Admin\FieldController::class);
    Route::resource('/majors', \App\Http\Controllers\Admin\MajorController::class);
    Route::resource('/countries', \App\Http\Controllers\Admin\CountryController::class);
    Route::resource('/scholarships', \App\Http\Controllers\Admin\ScholarshipController::class);
    Route::resource('/faqs', \App\Http\Controllers\Admin\FaQController::class);
    Route::resource('/success-stories', \App\Http\Controllers\Admin\SuccessStoryController::class);
});
