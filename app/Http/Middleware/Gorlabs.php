<?php

namespace App\Http\Middleware;

use App\Classes\Gorlabs\Themes\Facades\Theme;
use Closure;

class Gorlabs
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
        if(checkDBConnection()){
            session()->put('admin_theme_category', env('ADMIN_THEME_CATEGORY'));
            session()->put('admin_theme', env('ADMIN_THEME'));
            session()->put('theme_category', env('THEME_CATEGORY'));
            session()->put('theme', env('THEME'));
            $adminPath = 'admins/' . session()->get('admin_theme_category').'/'. session()->get('admin_theme');
            //$frontEndPath = 'frontends/' . session()->get('theme_category').'/'. session()->get('theme');
            if($request->is('admin/*'))
                Theme::init($adminPath);
            elseif($request->is('admin'))
                Theme::init($adminPath);
            elseif($request->is('login'))
                Theme::init($adminPath);
            elseif($request->is('register'))
                Theme::init($adminPath);
            elseif($request->is('owner'))
                Theme::init($adminPath);
            elseif($request->is('owner/*'))
                Theme::init($adminPath);
            //else
                //Theme::init($frontEndPath);
        }
        return $next($request);
    }
}
