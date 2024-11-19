<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes;
use App\Models\Eventos;
use Illuminate\Support\Arr;

class Medallas extends Model
{
    use HasFactory;

    protected $table = 'medallas';
    protected $fillable = ['tipo_de_medalla', 'id_eventos'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }

    
    public function setTipoMedallas(){
        return "{$this->tipo_de_medalla}";
    }
    public function getTipoDeMedallas(){
        return "{$this->tipo_de_medalla}";
    }
    public function getId_evento(){
        return $this->id_eventos;
    }
    public function setTipoDeMedallas($puesto){
        if($puesto==1){
            $this->tipo_de_medalla="Oro";
        }elseif($puesto==2){
            $this->tipo_de_medalla="Plata";
        }elseif($puesto==3){
            $this->tipo_de_medalla="Bronze";
        }
    }
}