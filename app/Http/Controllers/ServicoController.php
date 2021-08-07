<?php

namespace App\Http\Controllers;

use App\Models\Servico;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::simplePaginate(10);
        return view('servicos.index')->with('servicos',$servicos);
    }
    public function create()
    {
        return view('servicos.create');
    }
}
