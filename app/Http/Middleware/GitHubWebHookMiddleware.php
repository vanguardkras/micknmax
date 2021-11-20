<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
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

        $hash = hash_hmac('sha256', $request->getContent(), config('app.key'));

        if ($secret !== 'sha256=' . $hash) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
