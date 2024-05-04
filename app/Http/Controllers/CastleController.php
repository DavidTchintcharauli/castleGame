<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CastleController extends Controller
{
    public function showGate()
    {
        return view('castle.gate');
    }
}
