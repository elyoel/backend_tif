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
    
    public function __construct(
        public string $nombre,
        public string $apellido,
        public int $edad
    ){
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


    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function getNombre(){
        return "{$this->nombre}";
    }
    public function setApellido($apellido){
        return $this->apellido = $apellido;
    }
    public function getApellido(){
        return "{$this->apellido}";
    }
}
