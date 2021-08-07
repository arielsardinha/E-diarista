<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class ListaRDiarias extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $diarias = Diaria::get();
        return view('welcome',['diarias',$diarias]);
    }
}
