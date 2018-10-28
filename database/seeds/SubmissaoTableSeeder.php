<?php

use Illuminate\Database\Seeder;
use App\Submissao;
use Carbon\Carbon;

class SubmissaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /**
         * Submissões Corretas
         */
        $correta1 = new Submissao();
        $correta1->status = "Correta";
        $correta1->resposta = "Solução correta.";
        $correta1->linguagem_id = 1;
        $correta1->created_at = Carbon::now()->subDays(3);
        $correta1->save();
        
        $correta2 = new Submissao();
        $correta2->status = "Correta";
        $correta2->resposta = "Solução correta.";
        $correta2->linguagem_id = 2;
        $correta2->created_at = Carbon::now()->subDays(1);
        $correta2->save();
        
        $correta3 = new Submissao();
        $correta3->status = "Correta";
        $correta3->resposta = "Solução correta.";
        $correta3->linguagem_id = 3;
        $correta3->created_at = Carbon::now()->subDays(1);
        $correta3->save();
        
        $correta4 = new Submissao();
        $correta4->status = "Correta";
        $correta4->resposta = "Solução correta.";
        $correta4->linguagem_id = 3;
        $correta4->created_at = Carbon::now()->subDays(1);
        $correta4->save();
        
        /**
         * Submissões com Erro de execução
         */
        $erroExecucao1 = new Submissao();
        $erroExecucao1->status = "Erro de execução";
        $erroExecucao1->resposta = "Solução apresentou problemas ao ser compilada. Verifique sua sintaxe!";
        $erroExecucao1->linguagem_id = 1;
        $erroExecucao1->created_at = Carbon::now()->subDays(2);
        $erroExecucao1->save();
        
        $erroExecucao2 = new Submissao();
        $erroExecucao2->status = "Erro de execução";
        $erroExecucao2->resposta = "Solução apresentou problemas ao ser compilada. Verifique sua sintaxe!";
        $erroExecucao2->linguagem_id = 2;
        $erroExecucao2->created_at = Carbon::now()->subDays(1);
        $erroExecucao2->save();
        
        $erroExecucao3 = new Submissao();
        $erroExecucao3->status = "Erro de execução";
        $erroExecucao3->resposta = "Solução apresentou problemas ao ser compilada. Verifique sua sintaxe!";
        $erroExecucao3->linguagem_id = 3;
        $erroExecucao3->created_at = Carbon::now()->subDays(1);
        $erroExecucao3->save();

        /**
         * Submissões Incorretas
         */
        $incorreta1 = new Submissao();
        $incorreta1->status = "Incorreta";
        $incorreta1->resposta = "Sua sintaxe está correta. Porém, a solução não apresentou os resultados esperados.";
        $incorreta1->linguagem_id = 1;
        $incorreta1->created_at = Carbon::now()->subDays(2);
        $incorreta1->save();
        
        $incorreta2 = new Submissao();
        $incorreta2->status = "Incorreta";
        $incorreta2->resposta = "Sua sintaxe está correta. Porém, a solução não apresentou os resultados esperados.";
        $incorreta2->linguagem_id = 2;
        $incorreta2->created_at = Carbon::now()->subDays(2);
        $incorreta2->save();
        
        $incorreta3 = new Submissao();
        $incorreta3->status = "Incorreta";
        $incorreta3->resposta = "Sua sintaxe está correta. Porém, a solução não apresentou os resultados esperados.";
        $incorreta3->linguagem_id = 3;
        $incorreta3->created_at = Carbon::now()->subDays(1);
        $incorreta3->save();

    }
}
