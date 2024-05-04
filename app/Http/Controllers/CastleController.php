<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastleController extends Controller
{
    public function showGate()
    {
        return view('castle.gate');
    }
}
