<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Medallas;

class medallasTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_obtenerMedallaDeOro()
    {
        $medallastest1 = new Medallas();

        $medallastest1->setTipo_de_Medallas(1);

        $this->assertEquals("Oro",$medallastest1->get('tipo_de_medallas'));
    }
    public function test_obtenerMedallaDePlata()
    {
        $medallastest2= new Medallas();
        $medallastest2->setTipo_de_Medallas(2);

        $this->assertEquals("Plata",$medallastest2->getTipo_de_Medallas());
    }
    public function test_obtenerMedallaDeBronze()
    {
        $medallastest3 = new Medallas();
        $medallastest3 ->setTipo_de_Medallas(3);

        $this->assertEquals("Bronze",$medallastest3->getTipo_de_Medallas());
    }
}
