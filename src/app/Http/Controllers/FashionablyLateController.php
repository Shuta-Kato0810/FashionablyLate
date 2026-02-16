<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionablyLateController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
