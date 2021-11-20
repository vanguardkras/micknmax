<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GitHubWebHookMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $secret = $request->header('X-Hub-Signature-256');

        if ($secret !== config('app.key')) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
