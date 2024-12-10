<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante_Medalla extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'participante__medalla';
    protected $fillable = ['id_participantes', 'id_medallas'];

}
