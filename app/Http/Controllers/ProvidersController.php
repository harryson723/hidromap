<?php

namespace App\Http\Controllers;

use App\Models\provider;
use App\Models\User;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $provider = new provider;
        $provider->id = $request->name;
        $provider->address = $request->address;
        $provider->phone = $request->phone;
        $provider->image = '';
        $provider->save();
        return redirect()->route('updateRol', ['id' => $request->name]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        // Encuentra tanto el usuario como el proveedor
        $user = User::find($request->id);
        $provider = Provider::find($request->id);

        // Actualiza los datos del usuario y el proveedor
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }

        if ($provider) {
            $provider->address = $request->address;
            $provider->phone = $request->phone;
            $provider->save();
        }
        return response()->json($provider);
    }
    public function getProvider($id)
    {
        $provider = provider::where('id', $id)->first();
        return response()->json($provider);
    }

    public function get(Request $request)
    {
        $providers = Provider::with('user')->get();
        return response()->json($providers);
    }


}
