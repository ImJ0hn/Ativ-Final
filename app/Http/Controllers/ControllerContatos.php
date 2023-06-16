<?php

namespace App\Http\Controllers;
use App\Models\ModelContato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ControllerContatos extends Controller
{

    public function CadastrarContato(Request $request){

        $validarDados = $request->validate(['nome' => 'required', 'cpf' => 'required', 'endereco' => 'required', 'dtnasc' => 'required', 'telefone'  => 'required', 'email'  => 'required']);

        $novoContato = ModelContato::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'endereco' => $request->input('endereco'),
            'dtnasc' => $request->input('dtnasc'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),

        ]);
        
        return redirect('/');
        
    }

    public function MostrarContatos(){
        $contatos = ModelContato::all();

        return view('index', compact('contatos'));
    }

    
    public function AlterarContato(ModelContato $salvarAlteracoes, Request $request){
        $dadosAlterados = $request->validate([
            'nome' => 'string|required',
            'cpf' => 'date|required',
            'endereco' => 'string|required',
            'dtnasc' => 'string|required',
            'telefone' => 'string|required',
            'email' => 'email|required'
        ]);

        $salvarAlteracoes->fill($dadosAlterados);
        $salvarAlteracoes->save();

        return Redirect('/');
    }


    public function DeletarContato($id){

       $contato = ModelContato::find($id);
       $contato->delete();

       return redirect('/');
    }
    


}
