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
    public function __construct(
        public string $nombre_disciplina,
        public string $tipo_de_disciplina,
        public int $id_eventos  
    ){
    }
    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }
    public function eventos(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
}
