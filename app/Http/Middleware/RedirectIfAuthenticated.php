<?php

<<<<<<< HEAD
namespace App\TodosBackend\Http\Middleware;
=======
namespace PaoloDavila\TodosBackend\Http\Middleware;
>>>>>>> 5f032173417b209584ba0481b77168133212ef43

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
