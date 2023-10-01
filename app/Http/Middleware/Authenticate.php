<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class Authenticate extends ParentAuthenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request,$guards): ?string
    {
        dd($guards);
        return $request->expectsJson() ? null : route('login');
    }
}
