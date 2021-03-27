<?php

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

Route::get('/',[App\Http\Controllers\UserController::class, 'welcome'])->name('welcome');
Route::get('/nos-voitures',[App\Http\Controllers\UserController::class, 'cars'])->name('cars');
Route::get('espace-membre',[App\Http\Controllers\UserController::class,'espaceMembre']);

Route::group(['prefix' => 'processus-location'], function (){
    Route::get('/{voiture}', [App\Http\Controllers\UserController::class, 'rentFirstProcess'])->name('rentFirstProcess');
    Route::get('/louer/{voiture}', [App\Http\Controllers\UserController::class, 'rentSecondProcess'])->name('rentSecondProcess');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//});

Route::group(['middleware' => 'isAdmin'],function(){
    Route::get('dashboard', [App\Http\Controllers\AdminController::class , 'dash'])->name('dashboard');
    Route::get('demande-location',[App\Http\Controllers\AdminController::class, 'demandeLocation'])->name('demandeLocation');
    Route::resource('voitures', \App\Http\Controllers\VoitureController::class);

    Route::post('/demande-location/acceptation/{id}',[App\Http\Controllers\AdminController::class,'accepterLocation'])->name('accepterLoc');

    Route::post('/demande-location/rejet/{id}',[App\Http\Controllers\AdminController::class,'rejeterLocation'])->name('rejeterLoc');
});

//Route::get('/dashboard',[App\Http\Controllers\UserController::class, 'isAdmin'])->name('dashboard');

