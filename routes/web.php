<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeaController;
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

  Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas.index');
  Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideas.create');
  Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
  Route::get('/ideas/{id}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
  Route::put('/ideas/{id}', [IdeaController::class, 'update'])->name('ideas.update');
  Route::get('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

  Route::get('/works', [WorkController::class, 'index'])->name('works.index');
  Route::post('/works', [WorkController::class, 'store'])->name('works.store');
  Route::get('/works/create', [WorkController::class, 'create'])->name('works.create');
  Route::get('/works/{id}/view', [WorkController::class, 'view'])->name('works.view');
  Route::get('/works/{id}/viewPDF', [WorkController::class, 'viewPDF'])->name('works.viewPDF');

  Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

  Route::get('/users', [UserController::class, 'index'])->name('users.index');
  Route::post('/users', [UserController::class, 'store'])->name('users.store');
  Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
  Route::get('/users/{id}/view', [UserController::class, 'view'])->name('users.view');
});