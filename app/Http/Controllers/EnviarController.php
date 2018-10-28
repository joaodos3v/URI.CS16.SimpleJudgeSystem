<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linguagem;

class EnviarController extends Controller
{
    
    public function index() {
        $linguagens = Linguagem::all();
        return view('enviar', compact('linguagens'));
    }

}
