<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DemandeAdhesion extends Model
{
    use Notifiable;

    use HasFactory;
    protected $guarded= [];

    public function scopeValid($query){
        $query->whereNotNull("approuve_par");
    }

    public function scopeInvalid($query){
        $query->whereNull("approuve_par");

    }
}
