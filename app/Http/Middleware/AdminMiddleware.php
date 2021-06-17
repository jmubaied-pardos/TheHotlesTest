<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(!$request->user->hasRole('admin')){
            $errorResponse['data']['error'] = 'Unauthorized.';
            return response()->json($errorResponse, 401);
        }

        return $next($request);
    }
}
