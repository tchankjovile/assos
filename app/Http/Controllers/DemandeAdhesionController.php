<?php

namespace App\Http\Controllers;

use App\Models\DemandeAdhesion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DemandeAdhesionController extends Controller
{
    public function index() {
        return view("adhesion.ask");
    }

    public function store(Request $request){
    $data =    $request->validate([
            'nom'=>"required",
            'prenom'=>'required',
            'ville'=>'required',
            'photo_cni'=>'required|image',
            'photo'=>'required|image',
            'email'=>'required|unique:demande_adhesions,email',
            'sexe'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required|date',
            'no_cni'=>'required|unique:demande_adhesions,no_cni',
            'pays'=>'required',
            'profession'=>'required'
        ]);
    $data['photo'] = $request->file("photo")->store('images');
    $data['photo_cni'] = $request->file("photo_cni")->store("images");
    DemandeAdhesion::create($data);
    return back()->with("success","demande d'hadesion envoye");
    }
}
