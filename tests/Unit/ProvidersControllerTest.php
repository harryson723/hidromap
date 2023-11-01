<?php

namespace Tests\Unit;

use Faker as Faker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\Provider;
use App\Http\Controllers\ProvidersController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class ProvidersControllerTest extends TestCase
{
    use DatabaseTransactions;
    public function testStoreMethod()
    {
        $faker = Faker\Factory::create();
        $phone = $faker->phoneNumber;
        $address = $faker->address;
        $controller = new ProvidersController();
        $request = new Request([
            'name' => 3,
            'address' =>  $address,
            'phone' => $phone,
            'image' => 'https://picsum.photos/300/300',
        ]);

        $response = $controller->store($request);

        $this->assertDatabaseHas('providers', [
            'id' => 3,
            'address' =>  $address,
            'phone' => $phone,
        ]);

    }

    public function testEditMethod()
    {
        $faker = Faker\Factory::create();
        $phone = $faker->phoneNumber;
        $address = $faker->address;
        $name =  $faker->name;
        $controller = new ProvidersController();
        $request = new Request([
            'id' => 3,
            'address' => $address,
            'phone' => $phone,
            'name' =>  $name,
            'email' => 'mhomenick@yahoo.com'
        ]);

        $response = $controller->edit($request);

        $this->assertDatabaseHas('providers', [
            'id' => 3,
            'address' =>  $address,
            'phone' => $phone,
            'image' => '',
        ], 'mysql');
    }

    public function testGetProviderMethod()
    {
        $response = $this->get('api/providers/3');

        $response->assertJsonFragment([
            'id' => 3,
            'image' => '',
            'phone' => '378-878-8623 x780',
        ]);
    }
}
