<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function contato()
    {
        return view('contato');
    }

    public function sobre()
    {
        $empresa = 'treina web';
        return view('sobre', ['empresa123' => $empresa]);
    }
}
