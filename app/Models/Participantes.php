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
    public $timestamps = false;
    protected $table = 'participantes';
    protected $fillable = ['nombre', 'apellido', 'edad', 'id_eventos','id_pais', 'id_medallas', 'id_disciplinas'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    
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
