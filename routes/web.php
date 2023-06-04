<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerContatos;

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

Route::get('/contatos/{id}', [ControllerContatos::class, 'EditarContato'])->name('editarContato');

//Deletar contato.
Route::delete('/contatos/{id}', [ControllerContatos::class, 'DeletarContato'])->name('deletarContato.destroy');


