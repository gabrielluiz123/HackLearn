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
use App\Post;

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

        $post = Post::orderBy('id','desc')->limit('1')->get();

        foreach ($post as $p) {
            $id = $p->id_user;
            $nome_user = User::where('id', $id)->first()->name;
        }
     

        return view('index_auth', compact('nome', 'id_user', 'ranking', 'post', 'nome_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


    }
    
    public function store(Request $request)
    {
         User::create([
            'name' =>$request->nome,
            'email'=>$request->email,
            'type'=> 2,
            'password'=>bcrypt($request->senha),
            ]);
         $user_id = User::orderBy('id', 'desc')->first()->id;
         User_attribute::create([
            'id_user'       =>$user_id,
            'exp'=>         0,
            'id_title'=>    1,
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


        $quiz_sub_5 = Quiz_user::where('id_user', $id_user)->get();

        $quiz_sub_facil = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id_user)->where('quiz.id_difficulty', 1)->get();

        $l = 0;
        foreach ($quiz_sub_facil as $qsf) 
        {
            $questions = $qsf->question_t;
            $questionsC = $qsf->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_easy = 0;
        if($l > 3)
        {
            $quiz_king_easy = 1;
        }

        $quiz_sub_medio = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id_user)->where('quiz.id_difficulty', 2)->get();

        $l = 0;
        foreach ($quiz_sub_medio as $qsm) 
        {
            $questions = $qsm->question_t;
            $questionsC = $qsm->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_mediun = 0;
        if($l > 3)
        {
            $quiz_king_mediun = 1;
        }

        $quiz_sub_dificil = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id_user)->where('quiz.id_difficulty', 3)->get();

        $l = 0;
        foreach ($quiz_sub_dificil as $qsd) 
        {
            $questions = $qsd->question_t;
            $questionsC = $qsd->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_hard = 0;
        if($l > 3)
        {
            $quiz_king_hard = 1;
        }

        $i = 0;
        $j = 0;
        $k = 0;
        $quiz_hacker_god = 0;

        foreach ($quiz_sub_5 as $q5) {
            $i++;
            $questions = $q5->question_t;
            $questionsC = $q5->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $j++;
                $k++;
                if($k==3)
                {
                    $quiz_hacker_god = 1;
                }

            }
        }

        $quiz_hacker = 0;
        if($j>3)
        {
            $quiz_hacker = 1;
        }
        $quiz_persistente = 0;
        if($i>3)
        {
            $quiz_persistente = 1;
        }

        $quiz_hacker_master = 0;
        if($j>6)
        {
            $quiz_hacker_master = 1;
        }
        $quiz_insistente = 0;
        if($i>6)
        {
            $quiz_insistente = 1;
        }

        $post = Post::where('id_user', $id_user)->get();

        if($type==1){
            return view('index_auth_adm', compact('perfil', 'nome', 'id_user', 'quiz', 'numero', 'title', 'attributes_exp', 'nQuiz', 'nQuizuser', 'quiz_hacker', 'quiz_persistente', 'quiz_hacker_master', 'quiz_insistente', 'quiz_hacker_god', 'quiz_king_easy', 'quiz_king_mediun', 'quiz_king_hard', 'post'));
        }else{
            return view('perfil', compact('perfil', 'nome', 'id_user', 'attributes_exp', 'title', 'nQuiz', 'nQuizuser', 'quiz_hacker', 'quiz_persistente', 'quiz_hacker_master', 'quiz_insistente', 'quiz_hacker_god', 'quiz_king_easy', 'quiz_king_mediun', 'quiz_king_hard', 'post'));
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

        $quiz_sub_5 = Quiz_user::where('id_user', $id)->get();

        $quiz_sub_facil = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id)->where('quiz.id_difficulty', 1)->get();

        $l = 0;
        foreach ($quiz_sub_facil as $qsf) 
        {
            $questions = $qsf->question_t;
            $questionsC = $qsf->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_easy = 0;
        if($l > 3)
        {
            $quiz_king_easy = 1;
        }

        $quiz_sub_medio = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id)->where('quiz.id_difficulty', 2)->get();

        $l = 0;
        foreach ($quiz_sub_medio as $qsm) 
        {
            $questions = $qsm->question_t;
            $questionsC = $qsm->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_mediun = 0;
        if($l > 3)
        {
            $quiz_king_mediun = 1;
        }

        $quiz_sub_dificil = Quiz_user::join('quiz', 'quiz.id', '=', 'quiz_users.id_quiz')->where('quiz_users.id_user', $id)->where('quiz.id_difficulty', 3)->get();

        $l = 0;
        foreach ($quiz_sub_dificil as $qsd) 
        {
            $questions = $qsd->question_t;
            $questionsC = $qsd->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $l++;


            }   
        }

        $quiz_king_hard = 0;
        if($l > 3)
        {
            $quiz_king_hard = 1;
        }

        $i = 0;
        $j = 0;
        $k = 0;
        $quiz_hacker_god = 0;

        foreach ($quiz_sub_5 as $q5) {
            $i++;
            $questions = $q5->question_t;
            $questionsC = $q5->question_c;
            $c = $questionsC/$questions;
            if($c >= 0.6)
            {
                $j++;
                $k++;
                if($k==3)
                {
                    $quiz_hacker_god = 1;
                }

            }
        }

        $quiz_hacker = 0;
        if($j>3)
        {
            $quiz_hacker = 1;
        }
        $quiz_persistente = 0;
        if($i>3)
        {
            $quiz_persistente = 1;
        }

        $quiz_hacker_master = 0;
        if($j>6)
        {
            $quiz_hacker_master = 1;
        }
        $quiz_insistente = 0;
        if($i>6)
        {
            $quiz_insistente = 1;
        }

        $post = Post::where('id_user', $id)->get();

        $quiz = Quiz::get();
        $nQuiz = count($quiz);

        $quiz_user = Quiz_user::where('id_user', $id_user)->get();
        $nQuizuser = count($quiz_user);
        
        
        return view('perfilUs', compact('perfil', 'nome', 'id_user', 'attributes_exp', 'title', 'nQuiz', 'nQuizuser', 'quiz_hacker', 'quiz_persistente', 'quiz_hacker_master', 'quiz_insistente', 'quiz_hacker_god', 'quiz_king_easy', 'quiz_king_mediun', 'quiz_king_hard', 'post'));
    
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
