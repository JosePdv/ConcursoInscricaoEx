<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recurso';
    protected $fillable = [
        'id',
        'formulario_id',
        'avaliador_id',
        'recurso',
        'recurso_aceito',
        'recurso_editado',
        'data_verificacao_recurso',
    ];

    public function formularios(){
        return $this->hasOne(Formulario::class, 'id', 'formulario_id');
    }
}




