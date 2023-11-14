<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNoSuccess
{
    public function handle($request, Closure $next)
    {
        // Verifica si no hay una sesión activa o si la variable 'success' no está configurada
        if (!session()->has('success')) {
            return redirect()->route('login'); // Redirige al formulario de inicio de sesión
        }

        return $next($request);
    }
}