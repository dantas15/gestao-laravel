<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function index()
    {
        return view('site/sobre-nos');
    }
}
