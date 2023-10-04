<?php

use App\Http\Controllers\Admin\AdminDemandeAdhesionController;
use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware("auth:admin")->prefix("admin")->as("admin.")
    ->group(function () {
        Route::redirect("/","/home");
        Route::get("home", [AdminHomeController::class, "home"])->name("home");
        Route::get('demandes/all', [AdminDemandeAdhesionController::class, "index"])->name("demandes.index");
        Route::get('demandes/list-valid', [AdminDemandeAdhesionController::class, "listValid"])->name("demandes.listvalid");
        Route::get('demandes/list-invalid', [AdminDemandeAdhesionController::class, "listInValid"])->name("demandes.listinvalid");
        Route::post("demandes/{demande}/accepter", [AdminDemandeAdhesionController::class, "accepter"])->name("demandes.accepter");
        #don
        Route::get("/dons",[\App\Http\Controllers\Admin\AdminDonController::class,"index"])->name("dons.index");
        Route::get('demandes/list-invalid', [AdminDemandeAdhesionController::class, "listInValid"])->name("demandes.listinvalid");
        Route::resource("membres", \App\Http\Controllers\Admin\AdminMembreController::class);
    });
