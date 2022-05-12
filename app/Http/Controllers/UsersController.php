<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    function __construct()
    {
        $this->middleware('auth'); //no mostrar a no autenticados
        $this->middleware('roles');//no mostrar a el rol, añadir el middleware añadido al kernel por es alias
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        //$message = DB::table('messages')->where('id', $id)->first();
        return view ('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {

        $user = User::findOrFail($id);

        if ($request->file('foto'))
        {
                if(Storage::disk('public')->exists(('avatars/'.$user->foto)))
                {
                    Storage::disk('public')->delete('avatars/' . $user->foto);
                }
            $nombreImg = Str::random(10) . time();
            $extension = $request->file('foto')->clientExtension();
            $nombreCompletoImg = $nombreImg.".".$extension;

            $request->file('foto')->storeAs('public/avatars', $nombreCompletoImg); //storage app
            $user->foto = $nombreCompletoImg;
            $user->save();
        }
        $user->update($request->only('name', 'email'));

        //User::findOrFail($id)->update($request->all());


        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
