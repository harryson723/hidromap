<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Provider;
use App\Http\Controllers\ProvidersController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class ProvidersControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethod()
    {
        $controller = new ProvidersController();
        $request = new Request([
            'name' => 'Test Provider',
            'address' => 'Test Address',
            'phone' => '1234567890',
        ]);

        $response = $controller->store($request);

        $this->assertDatabaseHas('providers', [
            'name' => 'Test Provider',
            'address' => 'Test Address',
            'phone' => '1234567890',
        ]);

        $response->assertRedirect('updateRol'); // Reemplaza con la ruta correcta
    }

    public function testEditMethod()
    {
        $provider = Provider::factory()->create();

        $controller = new ProvidersController();
        $request = new Request([
            'id' => $provider->id,
            'address' => 'Updated Address',
            'phone' => '9876543210',
        ]);

        $response = $controller->edit($request);

        $this->assertDatabaseHas('providers', [
            'id' => $provider->id,
            'address' => 'Updated Address',
            'phone' => '9876543210',
        ]);

        $response->assertJson([
            // Expectations for JSON response, if any.
        ]);
    }

    public function testGetProviderMethod()
    {
        $provider = Provider::factory()->create();

        $controller = new ProvidersController();
        $response = $controller->getProvider($provider->id);

        $response->assertJson([
            'id' => $provider->id,
            'name' => $provider->name,
            'address' => $provider->address,
            'phone' => $provider->phone,
            // Add more expectations based on your data structure.
        ]);
    }
}
