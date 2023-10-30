<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\point;
use App\Http\Controllers\PointsController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class PointsControllerTest extends TestCase
{
    public function testStoreMethod()
    {
        $controller = new PointsController();
        $request = new Request([
            'latitude' => '10.123',
            'longitud' => '20.456',
            'description' => 'Test description',
            'FK_id_provider' => 1,
            // Replace with a valid FK_id_provider
        ]);

        $response = $controller->store($request);

        $this->assertDatabaseHas('points', [
            'latitude' => '10.123',
            'longitud' => '20.456',
            'description' => 'Test description',
            'FK_id_provider' => 1,
            // Replace with a valid FK_id_provider
        ]);

        $response->assertRedirect('addPoint'); // Replace with the correct route
    }

    public function testEditMethod()
    {
        $point = factory(Point::class)->create(); // Assuming you have a Point factory

        $controller = new PointsController();
        $request = new Request([
            'id' => $point->id,
            'latitude' => 'Updated latitude',
            'longitud' => 'Updated longitud',
            'description' => 'Updated description',
        ]);

        $response = $controller->edit($request);

        $this->assertDatabaseHas('points', [
            'id' => $point->id,
            'latitude' => 'Updated latitude',
            'longitud' => 'Updated longitud',
            'description' => 'Updated description',
        ]);

        $response->assertJson([
            // Response data expectations if you have any
        ]);
    }
}
