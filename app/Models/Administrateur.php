<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Administrateur extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function getfullnameAttribute(): string
    {
        return $this->nom . " ".$this->prenom;
    }
}
