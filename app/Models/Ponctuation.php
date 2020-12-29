<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ponctuation extends Model
{
    protected $fillable = [
        'formulario_id',
        'user_id',
        'ax_cpf',
        'ax_org',
        'ax_curriculum',
        'ax_escolaridade',
        'ax_conselho',
        'ax_graduacao',
        'ax_doutorado',
        'ax_mestrado',
        'ax_posgraduacao1',
        'ax_posgraduacao2',
        'ax_qualific1',
        'ax_qualific2',
        'ax_qualific3',
        'ax_qualific4',
        'ax_qualific5',
        'ax_espe1',
        'ax_espe2',
        'ax_espe3',
        'ax_espe4',
        'ax_laudo',
        'ponc_graduacao',
        'ponc_doutorado',
        'ponc_mestrado',
        'ponc_posgraduacao1',
        'ponc_posgraduacao2',
        'ponc_qualific1',
        'ponc_qualific2',
        'ponc_qualific3',
        'ponc_qualific4',
        'ponc_qualific5',
        'ponc_espe1',
        'ponc_espe2',
        'ponc_espe3',
        'ponc_espe4'

    ];
}
