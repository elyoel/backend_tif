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

        $medallastest1->setTipoDeMedallas(1);

        $this->assertEquals("Oro",$medallastest1->getTipoDeMedallas());
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
