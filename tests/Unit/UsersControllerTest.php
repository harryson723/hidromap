<?php

namespace Tests\Unit;

use Faker as Faker;
use Tests\TestCase;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;

class UsersControllerTest extends TestCase
{
    //use DatabaseTransactions;
    public function testStoreMethod()
    {
        $faker = Faker\Factory::create();
        $name = $faker->name;
        $email = $faker->unique()->email;
        $controller = new UsersController();
        $request = new Request([
            'name' => $name,
            'email' => $email,
            'rol' => 'usuario',
            'password' => 'password123#E',
            'password_confirmation' => 'password123#E',
        ]);

        $response = $controller->store($request);

        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
            'rol' => 'usuario',
        ]);

        
    }

    public function testLoginMethod()
    {
        $controller = new UsersController();
        $request = new Request([
            'name' => 'Fabian Gerhold',
            'password' => 'password123#E',
        ]);

        $response = $controller->login($request);

        $session = $this->app['session.store'];
        // Verifica que la sesión tenga un valor específico
        $this->assertEquals('Usuario con credenciales correctas', $session->get('success'));
    }
}
