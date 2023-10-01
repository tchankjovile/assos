<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    function index(){
        $prestations = Prestation::all();
        return view("prestations.index")->with([
            'prestations'=>$prestations
        ]);
    }
}
