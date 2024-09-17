<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disciplinas;
use App\Models\Participantes;
use App\Models\Medallas;

class Eventos extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    public function participantes(){
        return $this->belongsTo(Participantes::class, 'id_participantes');
    }
    public function Eventos(){
        return $this->belongsTo(Medallas::class, 'id_eventos');
    }
    public function disciplinas(){
        return $this->hasMany(Disciplinas::class, 'id');
    }
}
