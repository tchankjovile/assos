<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membre;
use Illuminate\Http\Request;

class AdminMembreController extends Controller
{
    public function index()
    {
        $membres = Membre::query()->with("role")->get();
        return view("admin.membres.membre_list")->with([
            'membres'=>$membres
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Membre $membre)
    {
    }

    public function edit(Membre $membre)
    {
    }

    public function update(Request $request, Membre $membre)
    {
    }

    public function destroy(Membre $membre)
    {
    }
}
