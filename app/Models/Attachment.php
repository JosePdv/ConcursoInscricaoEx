<?php

namespace App;

use App\Models\Formulario;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function formulario()
    {
        return $this->belongsTo(Formulario::class);
    }

    public function ponctuation()
    {
        return $this->hasOne(Ponctuation::class);
    }
}
