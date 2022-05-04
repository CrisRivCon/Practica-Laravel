<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$messages = DB::table('messages')->get();
        $messages = Message::all();
        //dd($messages);
        //return $messages;
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar mensaje
           //$message = Message::all();
        //return $request->all();

        //DB::table('messages')->insert([
        //    "email" => $request->input('email'),
        //    "ciudad" => $request->input('ciudad'),
        //    "fruta" => $request->input('fruta'),
        //    "mensaje" => $request->input('mensaje'),
        //    "created_at" => Carbon::now(),
        //    "updated_at" => Carbon::now()
        //]);
        Message::create($request->all());

        //Redireccionar
        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$message = DB::table('messages')->where('id', $id)->first();
        $message = Message::findOrFail($id);

        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        //$message = DB::table('messages')->where('id', $id)->first();
        return view ('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //DB::table('messages')->where('id', $id)->update([
        //    "email" => $request->input('email'),
        //    "ciudad" => $request->input('ciudad'),
        //    "fruta" => $request->input('fruta'),
        //    "mensaje" => $request->input('mensaje'),
        //    "updated_at" => Carbon::now(),
        //]);
        Message::findOrFail($id)->update($request->all());



        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('messages')->where('id', $id)->delete();
        Message::findOrFail($id)->delete();

        return redirect()->route('mensajes.index');
    }
}
