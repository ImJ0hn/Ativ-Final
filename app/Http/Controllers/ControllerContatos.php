<?php

namespace App\Http\Controllers;
use App\Models\ModelContatos;
use Illuminate\Http\Request;

class ControllerContatos extends Controller
{

    public function CadastrarContato(Request $request){

        $validarDados = $request->validate(['nome' => 'required', 'telefone'  => 'required', 'email'  => 'required']);

        $novoContato = ModelContatos::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),

        ]);
        
        return redirect('/');
        
    }


    // function CadastrarContato(Request $request){

    //     $modelCont = new ModelContatos();
    //     $modelCont->nome = $request->input('Nome');
    //     $modelCont->email = $request->input('E-mail');
    //     $modelCont->telefone = $request->input('Telefone');
    
    //     $modelCont->save();

    //     return view('index');
    // }

}
