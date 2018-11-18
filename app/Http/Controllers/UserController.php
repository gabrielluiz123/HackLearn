<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;
use App\Quiz;
use App\Quiz_answer;
use App\User_attribute;
use App\Title;

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
            'type'=> 2,
            'password'=>bcrypt($request->senha),
            ]);
        return redirect('/');
    }


    public function showPerfil()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;

        $perfil = User::where('id', $id_user)->get();
        $type = Auth::user()->type;

        $quiz = Quiz::where('status', 0)->get();

        $numero = count($quiz);

        $attributes_title = User_attribute::where('id_user', $id_user)->first()->id_title;
        $title = Title::where('id', $attributes_title)->first()->name;

        $attributes_exp = User_attribute::where('id_user', $id_user)->first()->exp;
        

        if($type==1){
            return view('index_auth_adm', compact('perfil', 'nome', 'id_user', 'quiz', 'numero', 'title', 'attributes_exp'));
        }else{
            return view('perfil', compact('perfil', 'nome', 'id_user', 'attributes_exp', 'title'));
        } 
        }  
        
    

      public function showPerfilUs($id)
    {
        $id_user = Auth::user()->id;
        $nome = Auth::user()->name;

        $attributes_title = User_attribute::where('id_user', $id)->first()->id_title;
        $title = Title::where('id', $attributes_title)->first()->name;

        $attributes_exp = User_attribute::where('id_user', $id)->first()->exp;

        $perfil = User::where('id', $id)->get();
        
        
        return view('perfilUs', compact('perfil', 'nome', 'id_user', 'attributes_exp', 'title'));
    
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

    /* 
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
    public function destroy()
    {
        $id_user = Auth::user()->id; 

        $user = User::findOrFail($id_user);

        $user->delete();

       return redirect('/');
    }
}
