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
use App\Quiz_user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $ranking = User_attribute::join('users', 'user_attributes.id', '=', 'users.id')->orderBy('user_attributes.exp', 'desc')->limit(10)->get();
         

        return view('index_auth', compact('nome', 'id_user', 'ranking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


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

        $quiz = Quiz::get();
        $nQuiz = count($quiz);

        $quiz_user = Quiz_user::where('id_user', $id_user)->get();
        $nQuizuser = count($quiz_user);

        if($type==1){
            return view('index_auth_adm', compact('perfil', 'nome', 'id_user', 'quiz', 'numero', 'title', 'attributes_exp', 'nQuiz', 'nQuizuser'));
        }else{
            return view('perfil', compact('perfil', 'nome', 'id_user', 'attributes_exp', 'title', 'nQuiz', 'nQuizuser'));
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


    public function ranking()
    {
        $id_user = Auth::user()->id;
        $nome = Auth::user()->name;
        $ranking = User_attribute::join('users', 'user_attributes.id_user', '=', 'users.id')->orderBy('user_attributes.exp', 'desc')->get();
        $j=1;
        foreach ($ranking as $r) {
            if($r->id_user == $id_user)
            {
                $posicao = $j;
            }
            $j++;
        }
         

        return view('ranking', compact('nome', 'id_user', 'ranking', 'posicao'));
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
