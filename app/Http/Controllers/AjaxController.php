<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Submissao;

class AjaxController extends Controller
{
    
    public function getSystemData(Request $_request) {
        $arrRetorno = array();
        $todasSubmissoesUltimos10Dias = Submissao::whereDate( 'created_at', '>=', Carbon::now()->subDays(10))->get();

        $corretas     = array();
        $erroExecucao = array();
        $incorretas   = array();
        foreach ($todasSubmissoesUltimos10Dias as $key => $submissao) {
            if( $submissao->status == "Correta" )               array_push($corretas, $submissao->created_at->toDateString() );
            else if( $submissao->status == "Erro de execução" ) array_push($erroExecucao, $submissao->created_at->toDateString() );
            else if( $submissao->status == "Incorreta" )        array_push($incorretas, $submissao->created_at->toDateString() );
        }
        
        $arrRetorno["corretas"]     = array_count_values($corretas);
        $arrRetorno["erroExecucao"] = array_count_values($erroExecucao);
        $arrRetorno["incorretas"]   = array_count_values($incorretas);

        return response()->json(['response' => $arrRetorno]);
    }

}
