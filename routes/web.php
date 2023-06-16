<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerContatos;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'index');

// Cadastra um contato novo.
Route::post('/cadastrarContato', [ControllerContatos::class, 'CadastrarContato'])->name('cadastrarContato');

// Mostrar as informações.
Route::get('/', [ControllerContatos::class, 'MostrarContatos']);

// Route::get('/contatos/{id}', [ControllerContatos::class, 'EditarContatos'])->middleware('auth');

Route::get('/contato/{id}',[ControllerContatos::class,'MostrarContato'])->name('mostrarContato');

Route::put('/alterarContato/{salvarAlteracoes}', [ControllerContatos::class,'AlterarContato'])->name('alterar-banco-contato');

//Deletar contato.
Route::delete('/contatos/{id}', [ControllerContatos::class, 'DeletarContato'])->name('deletarContato.destroy');


