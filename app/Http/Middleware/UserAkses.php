<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Tambahkan baris ini untuk mengimpor kelas Log

class UserAkses
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $user = Auth::user();

        if (!$user) {
            return response()->json('Anda tidak diperbolehkan akses halaman ini!', 403);
        }

        $userRole = auth()->user()->role;
        Log::info("User role: $userRole, Expected role: $role"); // Gunakan kelas Log dengan benar

        if ($userRole == $role) {
            return $next($request);
        }
        return response()->json('Anda tidak diperbolehkan akses halaman ini!', 403);
    }
}
