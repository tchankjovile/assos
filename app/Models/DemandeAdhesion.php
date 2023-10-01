<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAdhesion extends Model
{
    use HasFactory;
    protected $guarded= [];

    public function scopeValid($query){
        $query->whereNotNull("approuve_par");
    }

    public function scopeInvalid($query){
        $query->whereNull("approuve_par");

    }
}
