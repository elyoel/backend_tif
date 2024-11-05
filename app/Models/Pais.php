<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'pais';

    public function __construct(
        public string $nombre_pais,
        public string $region
    ){
    }
    
    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }

    public function getNombre(){
        return "{$this->nombre_pais}";
    }
}
