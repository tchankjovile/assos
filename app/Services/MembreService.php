<?php


namespace App\Services;


use App\Models\Membre;

class MembreService
{
    public function create(array $data){
        return Membre::create($data);
    }
}
