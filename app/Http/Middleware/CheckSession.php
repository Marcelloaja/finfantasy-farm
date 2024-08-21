<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$level): Response
    {
        if (!$request->session()->exists('user')) {
            return redirect('')->with('resp_msg', 'Sesi anda tidak ditemukan, silahkan untuk masuk kembali.');
        } else {
            if ((in_array(session('user')[0]['id_role'], $level))) {
                return $next($request);
            } else {
                return redirect('');
            }
        }
    }
}
