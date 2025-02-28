<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CampusAngel\Auth\LoginCampusAngelController;
use App\Http\Controllers\CampusAngel\Auth\RegisterCampusAngelController;
use App\Http\Controllers\CampusAngel\DashboardCampusAngelController;

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
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Les Routes pour l'Admin

Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard','index');
    });
});

// Les Routes de l'authentification pour Campus Angels
Route::prefix('campus')->middleware(['campus.guest'])->group(function(){
    Route::get('register',[RegisterCampusAngelController::class, 'showFormRegister']);
    Route::post('register',[RegisterCampusAngelController::class, 'register']);

    Route::get('login',[LoginCampusAngelController::class, 'showFormLogin']);
    Route::post('login',[LoginCampusAngelController::class, 'login']);
});

Route::prefix('campus')->middleware(['campus.auth'])->group(function(){
    Route::get('dashboard',[DashboardCampusAngelController::class, 'index']);
    Route::post('logout',[LoginCampusAngelController::class, 'logout']);
});
