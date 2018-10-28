<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissoesController extends Controller
{
    
    public function index() {
        return view('submissoes');
    }

}
