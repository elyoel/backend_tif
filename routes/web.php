<?php

use App\Models\Disciplinas;
use App\Models\Eventos;
use App\Models\Pais;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
   /* $pj1 = new Pais;
    $pj1->nombre_de_pais = 'Chile';
    $pj1->region = 'America del Sur';
    $pj1->save();

    $evento1 = new Eventos;
    $evento1->nombre_evento = 'Quinces';
    $evento1->fecha_del_evento = '2024-09-17';
    $evento1->save();

    return $evento1;
    return $pj1;
    
    $dis1 = new Disciplinas;
    $dis1->id_eventos = 1;
    $dis1->nombre_disciplinas = 'natación';
    $dis1->tipo_de_disciplinas = 'natacion';
    $dis1->save();
    */

    return $dis1 = Disciplinas::get('id_eventos');
});