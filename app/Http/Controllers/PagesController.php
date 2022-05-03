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
    public function contacto()
    {
        return view('contacto');
    }
    public function saludo($nombre='Invitado')
    {
        return view('saludo', compact('nombre'));
    }
    public function mensaje(\App\Http\Requests\MessageRequest $request)
    {
        $data = $request->all(); //devuelve un array y Laravel lo convierte en JSON
        return redirect()->route('contacto')->with('info', 'Tu mensaje ha sido enviado.');
    }
};
