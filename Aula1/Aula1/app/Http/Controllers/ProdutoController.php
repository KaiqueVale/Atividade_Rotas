<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
//    public function usuarios() {
//     $usuarios = ['Ana', 'Bruno', 'Carlos'];
//     return view('usuarios', compact('usuario'));
// }

 public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;

        return "Produto cadastrado: {$nome}";
    }

}
