<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Submissao;
use App\Linguagem;

class AjaxController extends Controller
{
    
    public function getSystemData(Request $_request) {
        $arrRetorno = array();
        $todasSubmissoesUltimos10Dias = Submissao::whereDate( 'created_at', '>=', Carbon::now()->subDays(10))->get();

        $corretas       = array();
        $erroCompilacao = array();
        $incorretas     = array();
        foreach ($todasSubmissoesUltimos10Dias as $key => $submissao) {
            if( $submissao->status == "Correta" )                   array_push($corretas, $submissao->created_at->toDateString() );
            else if( $submissao->status == "Erro de compilacao" )   array_push($erroCompilacao, $submissao->created_at->toDateString() );
            else if( $submissao->status == "Incorreta" )            array_push($incorretas, $submissao->created_at->toDateString() );
        }
        
        $arrRetorno["corretas"]       = array_count_values($corretas);
        $arrRetorno["erroCompilacao"] = array_count_values($erroCompilacao);
        $arrRetorno["incorretas"]     = array_count_values($incorretas);

        return response()->json(['response' => $arrRetorno]);
    }


    public function getLanguage($_id) {
        $linguagem = Linguagem::find($_id);
        return response()->json(['response' => $linguagem]);
    }


    public function submit(Request $_request) { 
        $this->checkDirectory();

        $submissao = new Submissao();
        $submissao->status = "Processando";
        $submissao->linguagem_id = $_request->get('linguagem_id');
        $submissao->problema_id  = $_request->get('problema_id');
        $submissao->save();

        $linguagem = Linguagem::find($_request->get('linguagem_id'));

        $this->createFile( $_request->codigo, $submissao->id, $linguagem->extensao );
        return response()->json(['response' => 'success']);
    }


    private function checkDirectory() {
        $pathDirectory = "/opt/simplejudgesystem/";
        
        if( !file_exists($pathDirectory) ) {
            mkdir( $pathDirectory );
        }
    }


    private function createFile( $_content, $_filename, $_ext ) {
        $fp = fopen( "/opt/simplejudgesystem/file" . $_filename . "." . $_ext, "wb");
        fwrite($fp, $_content);
        fclose($fp);
    }

}
