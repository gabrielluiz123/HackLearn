<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Challenge;
use Auth;
use App\Challenge_answer;
use App\User;
use App\User_attribute;
use App\Language;

class ChallengeController extends Controller
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

        return view('novo_desafio', compact('nome'));     
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
        Challenge::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'content'       => $request->content,
            'exp'           => $request->exp,
            ]);

        return redirect('/perfil');
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

        $desafios = Challenge::get();

        $desafios_user = Challenge_answer::where('id_user', $id_user)->get();

        return view('desafio_page', compact('nome', 'desafios', 'desafios_user'));
    }

    public function showDesafio($idD)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name; 

        $desafio = Challenge::where('id', $idD)->get();

        $linguagem = Language::get();


        return view('desafio_answer', compact('nome', 'desafio', 'linguagem'));
    }

    public function showDesafioCorrige($idD)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name; 

           $desafio_answer = Challenge_answer::where('id', $idD)->get();

           $desafio_id = Challenge_answer::where('id', $idD)->first()->id_challenge;
           $user_id = Challenge_answer::where('id', $idD)->first()->id_user;
           $language_id = Challenge_answer::where('id', $idD)->first()->language_id;

           $user_nome = User::where('id', $user_id)->first()->name;
           $language = Language::where('id', $language_id)->first()->name;




           $desafio = Challenge::where('id', $desafio_id)->get();
               

        return view('validar_desafio', compact('nome', 'desafio_answer', 'desafio', 'user_nome', 'language'));
    }

    public function storeChallengeAnswer(Request $request)
    {
        $id_user = Auth::user()->id;
        Challenge_answer::create([
            'answer'        => $request->answer,
            'language_id'   => $request->language,
            'status'        => 0,
            'id_user'       => $id_user,
            'id_challenge'  => $request->challenge,     

            ]);

        return redirect('/perfil');
    }

    public function CorrigeChallenge($idD)
    {
        $challenge = Challenge_answer::findOrFail($idD);

        $challenge->update([
            'status'    => 1,
            ]);

        $challenge_id = Challenge_answer::where('id', $idD)->first()->id_challenge;
        $user_id = Challenge_answer::where('id', $idD)->first()->id_user;

        $user_exp = User_attribute::where('id_user', $user_id)->first()->exp;

        $challenge_exp = Challenge::where('id', $challenge_id)->first()->exp;

        $new_exp = $challenge_exp + $user_exp;

        $user = User_attribute::findOrFail($user_id);

        $user->update([
        'exp'   => $new_exp,
            ]);

        return redirect('/perfil');



    }

    public function ChallengeErrado($idD)
    {
        $challenge = Challenge_answer::findOrFail($idD);

        $challenge->update([
            'status'    => 2,
            ]);

        return redirect('/perfil');
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
