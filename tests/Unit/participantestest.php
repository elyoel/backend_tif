<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Partcipantes;
class participantestest extends TestCase
{
    public function test_particiapntestest_nombre() {
        $partiejemplo=new participantes();
        $partiejemplo-> setNombre("yoel");

        $this->assertEquals("YOEL", $partiejemplo->getNombre());
    }
    
    public function test_particiapntestest_apellido() {
        $partiejemplo=new participantes();
        $partiejemplo-> setApellido("calderon");

        $this->assertEquals("CALDERON", $partiejemplo->getApellido());
    }
   
}

