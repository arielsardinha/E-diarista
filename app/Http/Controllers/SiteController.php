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
        return view('sobre');
    }
}
