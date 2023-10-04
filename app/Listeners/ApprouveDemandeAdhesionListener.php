<?php

namespace App\Listeners;

use App\Events\ApprouveAdhesionEvent;
use App\Models\Membre;
use App\Models\Role;
use App\Notifications\DemandeAdhesionApprouvedNotification;
use App\Services\MembreService;
use Illuminate\Support\Str;

class ApprouveDemandeAdhesionListener
{
    public function __construct(public  MembreService $membreService)
    {
    }

    public function handle(ApprouveAdhesionEvent $event)
    {
        $demande = $event->demandeAdhesion;
        $role = Role::membre()->first();
        //je cree un nouveau membre
        $login = Str::random(15);
        $password = Str::random(15);
        $membre = Membre::create([
            'email'=>$demande->email,
            'password'=>bcrypt($password),
            "login"=>$login,
            "prenom"=>$demande->prenom,
            "nom"=>$demande->nom,
            "no_cni"=>$demande->no_cni,
            "date_adhesion"=>now(),
            "date_naissance"=>$demande->date_naissance,
            "role_id"=>$role->id,
            "sexe"=>$demande->sexe,
        ]);
        //j'envoie le mail a ma demande d'adhesion
        $membre->notifyNow(new DemandeAdhesionApprouvedNotification($login,$password));
    }
}
