<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VirtualtourController extends Controller
{
    public function index()
    {
        return view('user.virtualtour');
    }
}
