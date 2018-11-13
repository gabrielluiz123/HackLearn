<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;
use App\Field;
use App\Difficulty;
use App\Quiz;
use App\Quiz_user;
use App\Quiz_answer;

class QuizController extends Controller
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
        $type = Auth::user()->type;

        $fields = Field::get();
        $difficulty = Difficulty::get();

        return view('area_quiz_page', compact('id_user', 'nome', 'type', 'fields', 'difficulty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $type = Auth::user()->type;

        $fields = Field::get();


        return view('novo_quiz', compact('id_user', 'nome', 'type', 'fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuiz(Request $request)
    {
        $id_user = Auth::user()->id;

         Quiz::create([
            'name'          => $request->titulo,
            'id_user'       => $id_user,
            'status'        => 0,
            'id_difficulty' => 1,
            'id_field'      => $request->field,
            'description'   => $request->descricao,
            'exp'           => $request->exp,
            ]);
         
        $nome_quiz = $request->titulo;
        $nome = User::where('id', $id_user)->first()->name;

         $id_quiz = DB::table('quiz')
                ->orderBy('id', 'desc')
                ->first()->id;

        return view('novo_quiz_questoes', compact('numero', 'id_user', 'id_quiz', 'nome', 'nome_quiz'));
    }

    public function storeAnswer(Request $request)
    {
        $id_quiz = $request->id_quiz;

        Quiz_answer::create([
            'question'      => $request->questao,
            'id_quiz'       => $id_quiz,
            'ans_1'         => $request->q1,
            'ans_2'         => $request->q2,
            'ans_3'         => $request->q3,
            'ans_4'         => $request->q4,
            'ans_c'         => $request->certa,
            ]);

        $id_user = Auth::user()->id;
        $nome_quiz = Quiz::where('id', $id_quiz)->first()->name;
        $nome = User::where('id', $id_user)->first()->name;

        return view('novo_quiz_questoes', compact('id_user', 'id_quiz', 'nome', 'nome_quiz'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idF)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $type = Auth::user()->type;

        //$difficulty = $request->difficulty;
        //$field = $request->fields;
        dd($idF);

        $quiz = Quiz::where('id_field', $field)->where('id_difficulty', $difficulty)->get();
        dd($quiz);

        return view('quiz_page', compact('id_user', 'nome'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
