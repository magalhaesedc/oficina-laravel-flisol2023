<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    public function index(){

        $participantes = Participante::all();

        return view('index', ['participantes' => $participantes]);
    }

    public function cadastrar(Request $request){

        $dados_participante = [
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'municipio' => $request->municipio,
        ];

        $participante = Participante::create($dados_participante);

        return redirect('/inicio');

    }
}
