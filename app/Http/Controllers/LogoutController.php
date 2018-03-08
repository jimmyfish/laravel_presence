<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
    	$request->session()->forget('users');
    	$request->session()->flush();

    	return redirect()->route('client_login');
    }
}
