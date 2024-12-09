<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Disciplinas;
use App\Models\Participantes;
use App\Models\Medallas;

class Eventos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'eventos';
    protected $fillable = ['nombre_evento', 'fecha_del_evento'];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function participantes(){
        return $this->belongsTo(Participantes::class, 'id_participantes');
    }
    public function medallas(){
        return $this->hasMany(Medallas::class, 'id');
    }
    public function disciplinas(){
        return $this->hasMany(Disciplinas::class, 'id');
    }
}
