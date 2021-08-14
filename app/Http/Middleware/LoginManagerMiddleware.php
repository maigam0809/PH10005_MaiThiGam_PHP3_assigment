<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginManagerMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        // $Cookie_user = Cookie::get('admin_login_remember');
        $session_user = Auth::check();

        if (isset($Cookie_user)) { // check isset cookie

            $check_user = User::where('remember_token', $session_user)->get();
            if (!isset($Cookie_user) ) {

                return redirect('/auth/login');
            }
        }

        else if ($session_user === false) { // check isset session
            return redirect('/auth/login');
        }


        return $next($request);
    }
}
