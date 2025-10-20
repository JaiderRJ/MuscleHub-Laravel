<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si el usuario está autenticado y tiene el rol 'admin'
        if (auth()->check() && auth()->user()->rol === 'admin') {
            return $next($request);
        }

        // Si no es admin, lo redirige
        return redirect('/home')->with('error', 'No tienes acceso a esta sección.');
    }
}
