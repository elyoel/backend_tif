<?php

namespace Tests\Unit;

use App\Models\Pais;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class paisTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_obtener_nombre_pais()
    {
        $pais1 = new Pais([
            'nombre_de_pais' => 'Argentina',
            'region' => 'Sudamerica'
        ]);
        
        $this->assertEquals($pais1->getNombre(), 'Argentina');

    }
}
