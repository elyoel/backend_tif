<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes;

class Pais extends Model
{
    use HasFactory;

    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }
}
