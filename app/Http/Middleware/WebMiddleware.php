<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (!Cache::has('settings')) {
            $settings = Content::pluck('value', 'key')->all();
            Cache::remember('settings', 60*24*30 , function () use ($settings) {
                return $settings;
            });
            config()->set('settings', cache('settings'));
        }else{
            config()->set('settings', cache('settings'));
        }

        return $next($request);
    }
}
