<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $userAgent = $request->userAgent();
        $today = date('Y-m-d');

        // Track only unique daily IP visits
        Visitor::firstOrCreate([
            'ip_address' => $ip,
            'visited_at' => $today
        ], [
            'user_agent' => $userAgent
        ]);

        return $next($request);
    }
}
