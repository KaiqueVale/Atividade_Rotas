<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index() {
        $disciplinas = [ ['id' => 1, 'nome' => 'Matemática'],
                         ['id' => 2, 'nome' => 'Português'],
                         ['id' => 3, 'nome' => 'História'] ];
        return view('disciplinas.index', compact('disciplinas'));

    }

    public function create() {
        return view('disciplinas.create');
    }

    public function store(Request $request) {
        $nome = $request->input('nome');
        return "Disciplina {$nome} criada com sucesso!";
    }

    public function show($id) {
        return "Detalhes da disciplina de ID: " . $id;
    }
}
