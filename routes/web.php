<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromoterController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/authenticate', [WelcomeController::class, 'authenticate'])->name('login');

Route::middleware('auth:promoters')->get('/home', [HomeController::class, 'index'])->name('admin.home.index');
Route::middleware('auth:promoters')->get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
Route::middleware('auth:promoters')->patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
Route::middleware('auth:promoters')->get('/logout', [ProfileController::class, 'logout'])->name('logout');

Route::middleware('auth:promoters')
    ->get('/events', [EventController::class, 'index'])->name('admin.event.index');
Route::middleware('auth:promoters')
    ->get('/events/new', [EventController::class, 'create'])->name('admin.event.create');
Route::middleware('auth:promoters')
    ->post('/events/new', [EventController::class, 'store'])->name('admin.event.store');
Route::middleware('auth:promoters')
    ->get('/events/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
Route::middleware('auth:promoters')
    ->patch('/events/edit/{id}', [EventController::class, 'update'])->name('admin.event.update');
Route::middleware('auth:promoters')
    ->get('/events/{id}', [EventController::class, 'show'])->name('admin.event.show');

Route::middleware(['auth:promoters', 'is_admin'])
    ->get('/promoters/list', [PromoterController::class, 'index'])->name('admin.promoters.index');
Route::middleware(['auth:promoters', 'is_admin'])
    ->get('/promoters/create', [PromoterController::class, 'create'])->name('admin.promoters.create');
Route::middleware(['auth:promoters', 'is_admin'])
    ->post('/promoters', [PromoterController::class, 'store'])->name('admin.promoters.store');
Route::middleware(['auth:promoters', 'is_admin'])
    ->get('/promoters/{id}', [PromoterController::class, 'edit'])->name('admin.promoters.edit');
Route::middleware(['auth:promoters', 'is_admin'])
    ->patch('/promoters/{id}', [PromoterController::class, 'update'])->name('admin.promoters.update');
