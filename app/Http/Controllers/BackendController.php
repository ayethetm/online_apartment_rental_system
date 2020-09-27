<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard($value='')
    {
    	return view('backend.dashboard');
    }
}
