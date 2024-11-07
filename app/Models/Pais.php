<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Participantes;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'pais';
    
    protected $fillable = ['nombre_de_pais', 'region'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function participantes(){
        return $this->hasMany(Participantes::class, 'id');
    }

    public function getNombre(){
        return "{$this->nombre_de_pais}";
    }
}
