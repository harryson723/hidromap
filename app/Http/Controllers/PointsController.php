<?php

namespace App\Http\Controllers;

use App\Models\point;
use App\Models\User;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'latitude' => 'required',
            'longitud' => 'required',
            'description' => 'required',
            'name' => 'required',
            'FK_id_provider' => 'required',
        ]);

        $point = new point;
        $point->latitude = $request->latitude;
        $point->longitud = $request->longitud;
        $point->description = $request->description;
        $point->name = $request->name;
        $point->FK_id_provider = $request->FK_id_provider;
        $point->save();

        return redirect()->route('login')->with('success:', 'Usuario creado exitosamente');
    }

    public function show(Point $point) {
        $points = point::all();
        return view('admin.points', ['points'=> $points]);
    }
}
