<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio;

class HomeController extends Controller
{
    public function index()
    {
        $viaggi = Viaggio::all();
        return view('home', compact('viaggi'));
    }
}
