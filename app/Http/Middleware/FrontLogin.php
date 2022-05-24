<?php

namespace App\Http\Middleware;

use App\Models\Item;
use Closure;

class FrontLogin
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
        $item = new Item();
        $result = $item->getItem();
        dd($result);exit;
        return $next($request);
    }
}
