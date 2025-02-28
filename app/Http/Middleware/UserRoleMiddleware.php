<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Check if the user's role matches the required role
        if ($request->user()->role !== $role) {
            // Redirect based on the user's role if it doesn't match the required role
            if ($request->user()->role === 'company') {
                return redirect()->route('company.dashboard');
            } elseif ($request->user()->role === 'candidate') {
                return redirect()->route('candidate.dashboard');
            }

            // Default response if no role matches
            return response()->json(['message' => 'Access denied.'], 403);
        }

        // Allow the request to proceed if the user's role matches
        return $next($request);
    }
}