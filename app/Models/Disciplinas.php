<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes; 
use App\Models\Eventos;

class Disciplinas extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    protected $fillable = ['id_eventos', 'nombre_disciplinas', 'tipo_de_disiplinas'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }


    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }
    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
}
