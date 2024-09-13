<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    use HasFactory;

    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }
    public function disciplinas(){
        return $this->belongsTo(Eventos::class, 'id_eventos');
    }
}
