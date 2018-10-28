<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 50);
            $table->string('resposta', 200)->nullable();
            $table->integer('linguagem_id')->unsigned();
            $table->foreign('linguagem_id')->references('id')->on('linguagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissao');
    }
}
