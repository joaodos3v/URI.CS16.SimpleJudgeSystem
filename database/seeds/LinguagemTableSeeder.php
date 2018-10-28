<?php

use Illuminate\Database\Seeder;
use App\Linguagem;

class LinguagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $php = new Linguagem();
        $php->nome = "PHP";
        $php->template = "<" . "?" . "php <br> \t// Digite seu código aqui <br> \t ?>";
        $php->linha_comando = "php nome_arquivo.php";
        $php->save();

        $js = new Linguagem();
        $js->nome = "JavaScript";
        $js->template = "// Digite seu código aqui";
        $js->linha_comando = "-";
        $js->save();
        */

        $cpp = new Linguagem();
        $cpp->nome = "C++";
        $cpp->template = "#include <iostream><br><br>using namespace std;<br><br>int main() {<br><br>\t// Digite seu código aqui<br><br>\treturn 0;<br><br>}";
        $cpp->linha_comando = "g++ arquivo.cpp -o arquivo";
        $cpp->save();
        
        
        $kotlin = new Linguagem();
        $kotlin->nome = "Kotlin";
        $kotlin->template = "fun main(args: Array<String>) {<br>\t/** Digite seu código aqui */<br>}";
        $kotlin->linha_comando = "comando kotlin";
        $kotlin->save();
        
        
        $java = new Linguagem();
        $java->nome = "Java";
        $java->template = "public class Main {<br>\tpublic static void main(String[] args) {<br>\t\t/** Digite seu código aqui */<br>\t}<br>}";
        $java->linha_comando = "comando java";
        $java->save();

    }
}
