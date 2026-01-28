<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// route::get('/sobre', function(){

// return view('sobre');

// });

// Route::get('/produto/{id}/{categoria}', function ($id, $categoria){

//     return "O id do produto é: " .$id .$categoria;
// });

// Route::get('/sobre', [PaginaController::class, 'sobre']);

#Questão1

Route::get('/Ola' , function() {

    return "Ola, Laravel";
});

#Questão2

Route::get('/Curso/ads' , function() {

    return "Curso de Análise e Desenvolvimento de Sistemas";
});

#Questão3

Route::get('/Curso/web' , function() {

    return "Disciplina Programação Web I";
});

#Questão4

route::get('/sobre', function(){

    return view('sobre');

});

#Questão5

route::get('/Contato', function(){

    return view('Contato');

});

#Questão6

route::get('/Institucional/missao', function(){

    return view('missao');

});

#Questão7

Route::get('/empresa', [PaginaController::class, 'empresa']);

#Questão8

Route::get('/servicos', [PaginaController::class, 'servicos']);

#Questão9

Route::get('/portifolio', [PaginaController::class, 'portifolio']);

Route::get('/blog', [PaginaController::class, 'blog']);

#Questão10

Route::get('/equipe', [PaginaController::class, 'equipe']);


#Questão11

// Route::get('/usuario/{nome}', function ($nome){

//      return "Usuário: " .$nome;
//  });

 #Questão12

  Route::get('/produto/{id}', function ($id){

     return "O id do produto é: " .$id;
});


// Exercícios Práticos — Controllers no Laravel
// Questão1

Route::get('/cursos', [App\Http\Controllers\CursoController::class, 'index']);

// Questão2
Route::get('/cursos/novo', [App\Http\Controllers\CursoController::class, 'create']);

// Questão3
Route::get('/cursos/listagem', [App\Http\Controllers\CursoController::class, 'listagem']);

// Questão4
Route::get('/cursos/{id}', [App\Http\Controllers\CursoController::class, 'show']);

// Questão5
Route::post('/cursos', [App\Http\Controllers\CursoController::class, 'store']);

// Questão6
Route::resource('alunos', AlunoController::class);

// Questão7
Route::get('disciplinas', [DisciplinaController::class,'index']);
Route::get('/disciplinas/create', [DisciplinaController::class,'create']);
Route::post('/disciplinas', [DisciplinaController::class,'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class,'show']);

//Atividade — Fluxo create → store
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
