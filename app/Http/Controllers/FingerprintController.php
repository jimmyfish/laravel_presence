<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fingerprint;

class FingerprintController extends Controller
{
    public function index()
    {
    	$fingerprint = Fingerprint::All();

    	return View('fingerprint.list');
    }
}
