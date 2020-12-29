<?php

namespace App\Models;

use App\Attachment;
use App\Ponctuation;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'formularios';

    protected $fillable = [
        'nome',
        'escolaridade',
        'cargo',
        'data_nascimento',
        'estado_civil',
        'sexo',
        'rg',
        'rg_org',
        'cpf',
        'nome_mae',
        'telefone',
        'email',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
        'protocolo',
        'vagas_deficiencia',
        'tipo_deficiencia',
        'avaliado',
        'aprovado',
        'anexocpf',
        'anexorg',
        'anexocurriculum',
        'anexoescolaridade',
        'anexoconselho',
        'anexograduacao',
        'anexodoutorado',
        'anexomestrado',
        'anexoposgraduacao1',
        'anexoposgraduacao2',
        'anexoqualific1',
        'anexoqualific2',
        'anexoqualific3',
        'anexoqualific4',
        'anexoqualific5',
        'anexoespe1',
        'anexoespe2',
        'anexoespe3',
        'anexoespe4',
        'anexolaudo',
        'indeferido',
        'descricaoIndeferido',
        'id_avaliador',
        'idRevisor',
        'dataRevisao',
        'dataAvaliacao'
    ];

    protected $dates = ['data_nascimento'];

    public function avaliado()
    {
        return $this->formulario->update(['avaliado' => true]);
    }

    public function ponctuation(){
        return $this->belongsTo(Ponctuation::class, 'formulario_id', 'id');
    }
}
