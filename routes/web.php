<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Business\Auth\LoginBusinessController;
use App\Http\Controllers\Business\Auth\RegisterBusinessController;
use App\Http\Controllers\Business\DashboardBusinessController;
use App\Http\Controllers\CampusAngel\Auth\LoginCampusAngelController;
use App\Http\Controllers\CampusAngel\Auth\RegisterCampusAngelController;
use App\Http\Controllers\CampusAngel\DashboardCampusAngelController;
use App\Http\Controllers\City\Auth\LoginCityController;
use App\Http\Controllers\City\Auth\RegisterCityController;
use App\Http\Controllers\City\DashboardCityController;
use App\Http\Controllers\Social\Auth\LoginSocialController;
use App\Http\Controllers\Social\Auth\RegisterSocialController;
use App\Http\Controllers\Social\DashboardSocialController;
use App\Http\Controllers\Territory\Auth\LoginTerritoryController;
use App\Http\Controllers\Territory\Auth\RegisterTerritoryController;
use App\Http\Controllers\Territory\DashboardTerritoryController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChallengeController;

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



Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/inscriptions', function () {
    return view('frontend.inscripton');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Les Routes pour l'Admin

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index');
    });
});

// Les Routes de l'authentification pour Campus Angels
Route::prefix('campus')->middleware(['campus.guest'])->group(function () {
    Route::get('register', [RegisterCampusAngelController::class, 'showFormRegister']);
    Route::post('register', [RegisterCampusAngelController::class, 'register']);

    Route::get('login', [LoginCampusAngelController::class, 'showFormLogin']);
    Route::post('login', [LoginCampusAngelController::class, 'login']);
});

Route::prefix('campus')->middleware(['campus.auth'])->group(function () {
    Route::get('dashboard', [DashboardCampusAngelController::class, 'index']);
    Route::post('logout', [LoginCampusAngelController::class, 'logout']);
});

// Les Routes de l'authentification pour City Angels
Route::prefix('city')->middleware(['city.guest'])->group(function () {
    Route::get('register', [RegisterCityController::class, 'showFormRegister']);
    Route::post('register', [RegisterCityController::class, 'register']);

    Route::get('login', [LoginCityController::class, 'showFormLogin']);
    Route::post('login', [LoginCityController::class, 'login']);
});

Route::prefix('city')->middleware(['city.auth'])->group(function () {
    Route::get('dashboard', [DashboardCityController::class, 'index']);
    Route::post('logout', [LoginCityController::class, 'logout']);
});


// Les Routes de l'authentification pour Territory Guardians
Route::prefix('territory')->middleware(['territory.guest'])->group(function () {
    Route::get('register', [RegisterTerritoryController::class, 'showFormRegister']);
    Route::post('register', [RegisterTerritoryController::class, 'register']);

    Route::get('login', [LoginTerritoryController::class, 'showFormLogin']);
    Route::post('login', [LoginTerritoryController::class, 'login']);
});

Route::prefix('territory')->middleware(['territory.auth'])->group(function () {
    Route::get('dashboard', [DashboardTerritoryController::class, 'index']);
    Route::post('logout', [LoginTerritoryController::class, 'logout']);
});

// Les Routes de l'authentification pour Business Guardians
Route::prefix('business')->middleware(['business.guest'])->group(function () {
    Route::get('register', [RegisterBusinessController::class, 'showFormRegister']);
    Route::post('register', [RegisterBusinessController::class, 'register']);

    Route::get('login', [LoginBusinessController::class, 'showFormLogin']);
    Route::post('login', [LoginBusinessController::class, 'login']);
});

Route::prefix('business')->middleware(['business.auth'])->group(function () {
    Route::get('dashboard', [DashboardBusinessController::class, 'index']);
    Route::post('logout', [LoginBusinessController::class, 'logout']);
});

// Les Routes de l'authentification pour Social Sponsors
Route::prefix('social')->middleware(['social.guest'])->group(function () {
    Route::get('register', [RegisterSocialController::class, 'showFormRegister']);
    Route::post('register', [RegisterSocialController::class, 'register']);

    Route::get('login', [LoginSocialController::class, 'showFormLogin']);
    Route::post('login', [LoginSocialController::class, 'login']);
});

Route::prefix('social')->middleware(['social.auth'])->group(function () {
    Route::get('dashboard', [DashboardSocialController::class, 'index']);
    Route::post('logout', [LoginSocialController::class, 'logout']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
});

Route::get('/challenges', [ChallengeController::class, 'index']);
Route::get('/challenges/{id}', [ChallengeController::class, 'show']);
Route::post('/challenges/{id}/submit', [ChallengeController::class, 'submit'])->middleware('auth');


Route::middleware(['auth', '2fa'])->group(function () {
    Route::get('/challenges', [ChallengeController::class, 'index']);
});
