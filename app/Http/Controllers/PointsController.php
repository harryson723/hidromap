<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->save();

        return redirect()->route('login')->with('success:', 'Usuario creado exitosamente');
    }
}
