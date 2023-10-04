<?php

namespace App\Http\Controllers\Admin;

use App\Events\ApprouveAdhesionEvent;
use App\Http\Controllers\Controller;
use App\Models\DemandeAdhesion;
use Illuminate\Http\Request;

class AdminDemandeAdhesionController extends Controller
{
    function index(){
        $demandes = DemandeAdhesion::all();
        $demandesValid = DemandeAdhesion::valid()->get();
        $demandesNonValid = DemandeAdhesion::invalid()->get();
        return view("admin.demandes.all",[
            'demandes'=>$demandes,
            "demandesValid"=>$demandesValid,
            "demandesNonValid"=>$demandesNonValid
        ]);
    }

    function listValid(){
        $demandesValid = DemandeAdhesion::valid()->get();
        return view("admin.demandes.list_valid",[
            "demandesValid"=>$demandesValid,
        ]);
    }

    function listInValid(){
        $demandesNonValid = DemandeAdhesion::invalid()->get();
        return view("admin.demandes.list_invalid",[
            "demandesNonValid"=>$demandesNonValid
        ]);
    }

    function accepter(Request $request,DemandeAdhesion $demande){
        $adminId = auth('admin')->id();
        $demande->approuve_par  = $adminId;
        $demande->save();
        event(new ApprouveAdhesionEvent($demande));
        return back()->with("success","demande approuve");
    }
}
