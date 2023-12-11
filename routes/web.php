<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/register', [UserController::class, 'getuser'])->name('getuser');
Route::post('checkLogin', [UserController::class, 'postuser'])->name('checkLogin');
Route::get('/edit/{id}', [UserController::class, 'getupdateuser'])->name('edit');
Route::post('/edit/{id}', [UserController::class, 'edituser'])->name('edituser');
Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
