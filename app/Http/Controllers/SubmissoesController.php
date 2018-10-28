<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submissao;

class SubmissoesController extends Controller
{
    
    public function index() {
        $submissoes = Submissao::orderBy('id')->get();
        return view('submissoes', compact('submissoes'));
    }

}
