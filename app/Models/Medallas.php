<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes;
use App\Models\Eventos;

class Medallas extends Model
{
    use HasFactory;

    protected $table = 'medallas';

    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }

    
    public function setTipoMedallas(){
        return "{$this->tipo_de_medallas}";
    }
    public function getTipoDeMedallas(){
        return "{$this->tipo_de_medallas}";
    }
    public function getID(){
        return $this->id;
    }
    public function setTipoDeMedallas($puesto){
        if($puesto==1){
            $this->tipo_de_medallas="Oro";
        }elseif($puesto==2){
            $this->tipo_de_medallas="Plata";
        }elseif($puesto==3){
            $this->tipo_de_medallas="Bronze";
        }
    }
}