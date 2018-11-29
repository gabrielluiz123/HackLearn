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

        return view('criar_desafio', compact('nome'));     
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

        return view('desafios', compact('nome', 'desafios', 'desafios_user'));
    }

    public function showDesafio($idD)
    {
        $id_user = Auth::user()->id;
        $nome = User::where('id', $id_user)->first()->name; 

        $desafio = Challenge::where('id', $idD)->get();

        return view('desafio_responder', compact('nome', 'desafio'));
    }

    public function storeChallengeAnswer(Request $request)
    {
        $id_user = Auth::user()->id;

        Challenge_answer::create([
            'answer'        => $request->answer,
            'language_id'   => $request->language,
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
