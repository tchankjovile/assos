<?php

namespace App\Http\Controllers;
use App\Models\Memnbre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    //
    public function index()
    {
        $membres = Membre::orderBy('id','desc')->paginate(5);
        return view('membres.index', compact('membres'));
    }
    public function create()
    {
        return view('membres.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'date_naissance' => 'required',
            'profession' => 'required',
            'telephone' => 'required',

        ]);
        Membre::create($request->post());
        return redirect()->route('membres.index')->with('success', 'un membre a bel et bien été crée.');
    }
    public function show(Membre $membre)
    {
        return view('membres.show',compact('membre'));
    }
    public function edit(Membre $membre)
    {
        return view('membres.edit',compact('membre'));
    }
    public function update(Request $request, Membre $membre)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'date_naissance' => 'required',
            'profession' => 'required',
            'telephone' => 'required',
        ]);
        $membre->fill($request->post())->save();
        return redirect()->route('membres.index')->with('succes','le membre à été modifier avec success');
    }
    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect()->route('membres.index')->with('success', 'le membre à été supprimé avec success');
    }
}
