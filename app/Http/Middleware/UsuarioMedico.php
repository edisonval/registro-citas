<?php

namespace App\Http\Middleware;

use Closure;

class UsuarioMedico
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->tipo == 'medico')
        return $next($request);
        return redirect('/');
    }
}
