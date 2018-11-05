<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         User::create([
            'name' =>$request->nome,
            'email'=>$request->email,
            'password'=>bcrypt($request->senha),
            ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;

        return view('index_auth', compact('nome', 'id_user'));
    }

    public function showPerfil($id)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;

        $perfil = User::where('id', $id)->get();

        return view('perfil', compact('perfil', 'nome', 'id_user'));
    }

      public function showPerfilUs($id)
    {
        $id_user = Auth::user()->id;
        $nome = Auth::user()->name;

        $perfil = User::where('id', $id)->get();

        return view('perfilUs', compact('perfil', 'nome', 'id_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function search(Request $request)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $perfil = User::where('name','like', '%'.$request->pesquisa.'%')->get();
        return view('pesquisa_perfil', compact('perfil','nome', 'id_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_user = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        DB::table('users')->
        where('id', $id_user)->
        update(['password' => bcrypt($request->password)]);

        return redirect('/');
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
