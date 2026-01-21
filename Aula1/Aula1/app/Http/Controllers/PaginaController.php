<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa()
    {
        return "Ola empresa";
    }



    public function servicos()
    {
        return view ('servicos');
    }



    public function portifolio()
    {
        return view ('portifolio');
    }




    public function blog()
    {
        return view ('blog');
    }


    public function equipe()
    {
        return view ('equipe');
    }


}
