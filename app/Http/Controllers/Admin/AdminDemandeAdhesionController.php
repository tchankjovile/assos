<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemandeAdhesion;
use Illuminate\Http\Request;

class AdminDemandeAdhesionController extends Controller
{
    function index(){
        $demandes = DemandeAdhesion::all();
        return view("admin.demandes.all",[
            'demandes'=>$demandes
        ]);
    }

    function accepter(){

    }

    function rejeter(){

    }
}
