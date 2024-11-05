<?php

namespace Tests\Unit;

use App\Models\Pais;
use PHPUnit\Framework\TestCase;

class paisTest extends TestCase
{
    /**
     * A basic unit test example.
     */
   function test_obetener_nombre(){
        $pais1 = new Pais('Argentina', 'Sudamerica');

        $this-> assertEquals($pais1->getNombre(), "Argentina");
   }

   
}
