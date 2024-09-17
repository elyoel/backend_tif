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
}
