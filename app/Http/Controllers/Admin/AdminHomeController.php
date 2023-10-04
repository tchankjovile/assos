<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemandeAdhesion;
use App\Models\Membre;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
 function home(){
        return view("admin.home")
            ->with([
                'adhesionsCount' => DemandeAdhesion::count(),
                'nonValidadhesionsCount' => DemandeAdhesion::invalid()->count(),
                'validAdhesionsCount' => DemandeAdhesion::valid()->count(),
                'membresCount' => Membre::count()
            ]);
 }
}
