<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submissao extends Model
{
    
    protected $table = "submissao";

    protected $fillable = [
        'id', 'status', 'resposta', 'linguagem_id'
    ];

    /**
     * Retorna as as informações da linguagem desta submissão.
     */
    public function linguagem() {
        return $this->belongsTo('App\Linguagem');
    }

}
