<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Participantes;

class participantesTest extends TestCase
{
    public function test_particiapantes_nombre()
    {
        $partiejemplo = new Participantes();
        $partiejemplo-> setNombre("YOEL");

        //$this->assertEquals("YOEL", $partiejemplo->getNombre());
        $this-> assertEquals($partiejemplo->getNombre(), "YOEL");
    }
    
    public function test_particiapantes_apellido()
    {
        $partiejemplo1 = new Participantes();
        $partiejemplo1-> setApellido("calderon");

        $this->assertEquals($partiejemplo1->getApellido(), "calderon");
        //$this-> assertTrue("caldera" == $partiejemplo1->getApellido());
        
    }
   
}

