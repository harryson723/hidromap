<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\point;
use App\Http\Controllers\PointsController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class PointsControllerTest extends TestCase
{
    use DatabaseTransactions;
    public function testStoreMethod()
    {

        $response = $this->post('api/point', [
            'latitude' => '10.123',
            'longitud' => '20.456',
            'description' => 'Test description',
            'name' => 'punto de prueba',
            'FK_id_provider' => 3,
        ]);



        $response->assertRedirect('addPoint'); // Replace with the correct route
    }

    public function testEditMethod()
    {
         
        $response = $this->post('api/point/7',[
            'id' => 7,
            'latitude' => 'Updated latitude',
            'longitud' => 'Updated longitud',
            'name' => 'punto de prueba actualizado',
            'description' => 'Updated description',
        ]);

        $response->assertJsonFragment([
            'id' => 7,
            'name' => 'punto de prueba actualizado',
        ]);

    }
}
