<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linguagem extends Model
{
    
    protected $table = "linguagem";

    protected $fillable = [
        'id', 'nome', 'template', 'linha_comando'
    ];

    /**
     * Retorna as submissões desta linguagem.
     */
    public function submissoes() {
        return $this->hasMany('App\Submissao');
    }


}
