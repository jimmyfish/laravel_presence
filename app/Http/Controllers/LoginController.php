<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserPersonal;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        $username = $request->input('username');
        $password = md5($request->input('password'));

        $selected = UserPersonal::where('username', $username)->first();

        if ($selected->password === $password) {
        	$role = unserialize($selected->roles)[0];
            
        	if ($role === 'ROLE_ADMIN') {
        		$request->session()->put('users', $selected);
                $request->session()->save();

        		return redirect()->route('client_home');
        	}
        }
    }
}
