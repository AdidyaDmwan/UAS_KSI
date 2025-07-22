<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictRobotsTxt
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('robots.txt')) {
            $userAgent = $request->header('User-Agent');

            // Cek apakah user-agent mengandung Googlebot, Bingbot, dll
            if (
                !str_contains($userAgent, 'Googlebot') &&
                !str_contains($userAgent, 'Bingbot')
            ) {
                // Blokir akses
                return response('Forbidden', 403);
            }
        }

        return $next($request);
    }
}
