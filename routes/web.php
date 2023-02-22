<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::get('/', [TodolistController::class, "index"])->name("index");
Route::get('/create', [TodolistController::class, "create"])->name("create");
Route::post('/store', [TodolistController::class, "store"])->name("store");
Route::get('/todo/{id}', [TodolistController::class, "show"])->name("todo");
Route::get('/edit/{id}', [TodolistController::class, "edit"])->name("edit");
Route::post('/update/{id}', [TodolistController::class, "update"])->name("update");
