<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpanelController extends Controller
{
    public function index()
    {
    	return view('epanel.index');
    }
}
