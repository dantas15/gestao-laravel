<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    function index()
    {
        var_dump($_POST);
        return view('site/contato', ['title' => 'Contato']);
    }
}
