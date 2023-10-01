<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\DemandeAdhesionController;
use App\Http\Controllers\Admin\AdminDemandeAdhesionController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("admin")->as("admin.")->group(function(){
    Route::get("home",[AdminHomeController::class,"home"])->name("home");
    Route::get('demande/all', [AdminDemandeAdhesionController::class,"index"])->name("demandes.index");
    Route::get('demande/accepter', [AdminDemandeAdhesionController::class,"accepted"])->name("demandes.approuver");
    Route::get('demande/rejeter', [AdminDemandeAdhesionController::class,"rejected"])->name("demandes.rejeter");

});
