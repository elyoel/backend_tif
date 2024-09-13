<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    use HasFactory;

    public function disciplinas(){
        return $this->belongsTo(Disciplinas::class, 'id_disciplinas');
    }

    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
    
    public function medallas(){
        return $this->belongsTo(Medallas::class, 'id_medallas');
    }
    public function pais(){
        return $this->belongsTo(Pais::class, 'id_pais');
    }
}
