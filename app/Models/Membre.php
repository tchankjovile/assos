<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'email', 'sexe', 'NO_CNI', 'ville_residence', 'pays_residence', 'telephone', 'profession', 'date_adhesion'];
}
