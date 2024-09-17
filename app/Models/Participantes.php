<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disciplinas;
use App\Models\Eventos;
use App\Models\Medallas;
use App\Models\Pais;

class Participantes extends Model
{
    use HasFactory;

    protected $table = 'participantes';

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
