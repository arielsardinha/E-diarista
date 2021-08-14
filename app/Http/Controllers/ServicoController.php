<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        $retorno = Servico::create($dados);

        return redirect()->route('servicos.index');
    }
}
