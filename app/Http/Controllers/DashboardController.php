<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Linguagem;
use App\Submissao;

class DashboardController extends Controller
{
    
    public function index() {
        $submissoesCriadasHoje       = Submissao::whereDate('created_at', Carbon::today())->get()->count();
        $submissoesTotais            = Submissao::all()->count();
        $linguagemMaisUtilizadaHoje  = Linguagem::find(1);
        $linguagemMaisUtilizadaTotal = Linguagem::find(1);

        // Identifica qual linguagem de programação foi mais utilizada nas submissões realizadas no dia atual e em todo o histórico do sistema para popular os gráficos da tela inicial
        $maiorNumeroSubmissoesHoje   = Linguagem::find(1)->submissoes()->whereDate('created_at', Carbon::today())->get()->count();
        $maiorNumeroSubmissoesTotal  = Linguagem::find(1)->submissoes()->count();
        $linguagensDeProgramacao = Linguagem::where('id', '>', 1)->get();
        foreach ($linguagensDeProgramacao as $key => $linguagem) {
            $numeroSubmissoesHojeLinguagemAtual  = $linguagem->submissoes()->whereDate('created_at', Carbon::today())->get()->count();
            $numeroSubmissoesTotalLinguagemAtual = $linguagem->submissoes()->count();
            
            if( $numeroSubmissoesHojeLinguagemAtual > $maiorNumeroSubmissoesHoje ) {
                $maiorNumeroSubmissoesHoje  = $numeroSubmissoesHojeLinguagemAtual;
                $linguagemMaisUtilizadaHoje = $linguagem;
            }
            if( $numeroSubmissoesTotalLinguagemAtual > $maiorNumeroSubmissoesTotal ) {
                $maiorNumeroSubmissoesTotal  = $numeroSubmissoesTotalLinguagemAtual;
                $linguagemMaisUtilizadaTotal = $linguagem;
            }
        }

        if( $maiorNumeroSubmissoesHoje <= 0 ) $linguagemMaisUtilizadaHoje = null;
        if( $maiorNumeroSubmissoesTotal <= 0 ) $linguagemMaisUtilizadaTotal = null;

        // Após obter os valores concretos de utilização nas submissões, calcula a porcentagem de uso para utilizar nos gráficos
        $porcentagemSubmissoesHoje  = $this->calculaPorcentagemDeUso($submissoesCriadasHoje, $maiorNumeroSubmissoesHoje);
        $porcentagemSubmissoesTotal = $this->calculaPorcentagemDeUso($submissoesTotais, $maiorNumeroSubmissoesTotal);

        return view('dashboard', compact('submissoesCriadasHoje', 'submissoesTotais', 'linguagemMaisUtilizadaHoje', 'porcentagemSubmissoesHoje', 'linguagemMaisUtilizadaTotal', 'porcentagemSubmissoesTotal' ));
    }


    public function calculaPorcentagemDeUso($total, $valor) {
        try {
            return number_format( ($valor / $total)  * 100 , 2);
        } catch(\Exception $e) {
            return 0;
        }
    }

}
