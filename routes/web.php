<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('app.index');
    Route::get('/bem-vindo', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome.index');

    Route::resource('usuarios', App\Http\Controllers\UserController::class)->names([
        'index' => 'user.index',
        'store' => 'user.store',
        'update' => 'user.update',
        'destroy' => 'user.destroy',
    ]);

    Route::get('meu-perfil', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
});
