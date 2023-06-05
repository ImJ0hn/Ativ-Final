<?php

namespace App\Http\Controllers;
use App\Models\ModelContato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ControllerContatos extends Controller
{

    public function CadastrarContato(Request $request){

        $validarDados = $request->validate(['nome' => 'required', 'telefone'  => 'required', 'email'  => 'required']);

        $novoContato = ModelContato::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),

        ]);
        
        return redirect('/');
        
    }

    public function MostrarContatos(){
        $contatos = ModelContato::all();

        return view('index', compact('contatos'));
    }

    
    

    public function DeletarContato($id){

       $contato = ModelContato::find($id);
       $contato->delete();

       return redirect('/');
    }
    


}
