<?php

namespace App\Events;

use App\Models\DemandeAdhesion;
use Illuminate\Foundation\Events\Dispatchable;

class ApprouveAdhesionEvent
{
    use Dispatchable;

    public function __construct(public  DemandeAdhesion $demandeAdhesion)
    {}
}
