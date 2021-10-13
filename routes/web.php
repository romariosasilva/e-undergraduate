<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [LoginController::class, 'showLoginForm']);

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home.index');
  Route::get('/ideas', [HomeController::class, 'ideas'])->name('ideas.index');

  Route::get('/works', [WorkController::class, 'index'])->name('works.index');
  Route::post('/works', [WorkController::class, 'store'])->name('works.store');
  Route::get('/works/create', [WorkController::class, 'create'])->name('works.create');
  Route::get('/works/view/{id}', [WorkController::class, 'view'])->name('works.view');
  Route::get('/works/viewPDF/{id}', [WorkController::class, 'viewPDF'])->name('works.viewPDF');

  Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

  Route::get('/users', [UserController::class, 'index'])->name('users.index');
  Route::post('/users', [UserController::class, 'store'])->name('users.store');
  Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
  Route::get('/users/view/{id}', [UserController::class, 'view'])->name('users.view');
});