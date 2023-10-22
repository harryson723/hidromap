<?php

namespace App\Http\Controllers;

use App\Models\provider;
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


}
