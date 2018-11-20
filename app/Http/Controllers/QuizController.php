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
use App\User_attribute;

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
    public function show(Request $request)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $type = Auth::user()->type;
        $dificuldade = Difficulty::where('id', $request->dificuldade)->first()->description;
        $field = Field::where('id', $request->field)->first()->name;

        $quiz = Quiz::where('id_field', $request->field)->where('id_difficulty', $request->dificuldade)->where('status', 1)->get();



        return view('quiz_page', compact('id_user', 'nome', 'quiz', 'dificuldade', 'field'));
    }

    public function showQuiz($idQ)
    {

        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;
        $type = Auth::user()->type;

        $quiz = Quiz::where('id', $idQ)->get();

        $quizD_id = Quiz::where('id', $idQ)->first()->id_difficulty;
        $dificuldade = Difficulty::where('id', $quizD_id)->first()->description;

        $quizU_id = Quiz::where('id', $idQ)->first()->id_user;
        $userC = User::where('id', $quizU_id)->first()->name;

        $quizF_id = Quiz::where('id', $idQ)->first()->id_field;
        $Field = Field::where('id', $quizF_id)->first()->name;

        $quiz_answer = Quiz_answer::where('id_quiz', $idQ)->get();

        return view('quiz_solution', compact('id_user', 'nome', 'quiz', 'dificuldade', 'userC', 'Field', 'quiz_answer', 'idQ'));
    }

    public function corrigeQuiz(Request $request)
    {
        $quiz_solution = Quiz_answer::where('id_quiz', $request->id_quiz)->get();
        $quiz_exp = Quiz::where('id', $request->id_quiz)->first()->exp;
        $i = 2;
        $j = 0;
        foreach ($quiz_solution as $q) {
             if($request->$i == $q->ans_c)
             {
                $j++;
             }
             $i++;
         }

         $n = count($quiz_solution);

         $result = $j/$n;

         if($result > 0.6)
         {
            $id_user = Auth::user()->id;
            $exp_user = User_attribute::where('id_user', $id_user)->first()->exp;
            $new_exp = $exp_user + $quiz_exp;

            $user = User_attribute::findOrFail($id_user);

            $user->update([
                'exp'   => $new_exp,
                ]);

            Quiz_user::create([
                'id_user'       => $id_user,
                'id_quiz'       => $request->id_quiz,
                'question_c'    => $j,
                'question_t'    => $n,
                ]);

            echo "<script>alert('Voce acertou ".$j." questão(ões)!!!')</script>";
            echo " <script>window.location = '/perfil'</script>";
           
         }
         echo "<script>alert('Voce acertou ".$j." questão(ões)!!!')</script>";
         echo " <script>window.location = '/perfil'</script>";
         
    }

    public function validarQuiz($id)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name;

        $quiz_a = Quiz::where('id', $id)->first()->id_field;
        $quiz_area = Field::where('id', $quiz_a)->first()->name;

        $quiz_u = Quiz::where('id', $id)->first()->id_user;
        $quiz_user = User::where('id', $quiz_u)->first()->name;

        $quiz = Quiz::where('id', $id)->get();

        $difficulty = Difficulty::get();

        $quiz_answer = Quiz_answer::where('id_quiz', $id)->get();


        return view('validar_quiz', compact('id_user', 'nome', 'quiz', 'quiz_area', 'quiz_user','difficulty', 'quiz_answer'));
    }

    public function validarQuizUpdate(Request $request)
    {
        $id_quiz = $request->id_quiz;

        $quiz = Quiz::findOrFail($id_quiz);



        $quiz->update([
            'status'        => 1,
            'id_difficulty'    => $request->dificuldade,
            ]);
        return redirect('/');
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
