<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio;

class HomeController extends Controller
{
    public function index()
    {
        $pacchetti = Viaggio::all();
        return view('home', compact('pacchetti'));
    }
}
