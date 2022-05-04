<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function saludo($nombre='Invitado')
    {
        return view('saludo', compact('nombre'));
    }

};
