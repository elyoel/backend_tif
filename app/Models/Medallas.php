<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medallas extends Model
{
    use HasFactory;

    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
    public function participantes(){
        return $this->hasMany(participantes::class, 'id_participantes');
    }
}
