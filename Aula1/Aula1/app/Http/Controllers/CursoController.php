<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return 'Lista de cursos';
    }

    public function create() {
        return view('cursos.create');
    }

    public function listagem() {
        $cursos = ['ADS', 'SI', 'CC', 'EC'];
        return view('cursos.listagem', compact('cursos'));
    }

    public function show($id) {
        return "Detalhes do curso de ID: " . $id;
    }

    public function store(Request $request) {
        $nome = $request->input('nome');
        return "Curso {$nome} criado com sucesso!";

    }
}
