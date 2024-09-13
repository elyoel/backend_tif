<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    public function participantes(){
        return $this->belongsTo(participantes::class, 'id');
    }
    public function Eventos(){
        return $this->belongsTo(Medallas::class, 'id');
    }
    public function disciplinas(){
        return $this->hasMany(Disciplinas::class, 'id');
    }
}
