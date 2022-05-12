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

    public function saludo($nombre='Invitado', $apellido='Apellido')
    {
        return view('saludo', compact('nombre'));
        //return view('saludo' )->with('nombre', $nombre);
        //return view('saludo', ['nombre'=> $nombre,'apellido'=> $apellido] );
    }

};
