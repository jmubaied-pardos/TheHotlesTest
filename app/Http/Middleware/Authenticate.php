<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        $token = $request->header('token');
        $user = User::where('remember_token', $token)->first();
        if(empty($user)){
            $errorResponse['data']['error'] = 'Unauthorized.';
            return response()->json($errorResponse, 401);
        }

        $request->user = $user;
        return $next($request);
    }
}
