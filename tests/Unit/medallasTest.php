<?php

namespace Tests\Unit;

use App\Models\Eventos;
use PHPUnit\Framework\TestCase;
use App\Models\Medallas;

class medallasTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_obtenerMedallaDeOro()
    {
        $evento1 = new Eventos([
            'id'=> 1,
            'nombre_de_evento' => 'Natacion Event',
            'fecha_del_evento' => '2022-22-22'
        ]);
        $medallastest1 = new Medallas([
            'tipo_de_medalla' => 'ORO',
            'id_eventos' => $evento1->id
        ]);

        $this->assertEquals($medallastest1->getTipoDeMedallas(), "ORO");
    }
    public function test_obtenerIdEvento()
    {
        $evento1 = new Eventos([
            'id'=> 1,
            'nombre_de_evento' => 'Natacion Event',
            'fecha_del_evento' => '2022-22-22'
        ]);
        $medalla= new Medallas([
            'tipo_de_medalla' => 'ORO',
            'id_eventos' => $evento1->id
        ]);

        $this->assertEquals($medalla->getId_evento(), 2);
    }




    public function test_obtenerMedallaDePlata()
    {
        $medallastest2= new Medallas();
        $medallastest2->setTipoDeMedallas(2);

        $this->assertEquals("Plata",$medallastest2->getTipoDeMedallas());
    }
    public function testobtenerMedallaDeBronze()
    {
        $medallastest3 = new Medallas();
        $medallastest3 ->setTipoDeMedallas(3);

        $this->assertEquals("Bronze",$medallastest3->getTipoDeMedallas());
    }
}
