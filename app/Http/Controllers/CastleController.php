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

    public function showPrison()
    {
        return view('castle.prison');
    }

    public function showWelcome()
    {
        return view('welcome');
    }
}
