<?php

namespace App\Http\Controllers;

use App\Models\point;
use App\Models\User;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function store(Request $request)
    {
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

        return redirect()->route('addPoint')->with('success:', 'Punto creado exitosamente');
    }

    public function show(Point $point)
    {
        $points = point::all();
        return view('admin.points', ['points' => $points]);
    }

    public function get()
    {
        $points = point::all();
        return response()->json($points);
    }


    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        $point = point::find($request->id);
        if ($point) {
            // $point->latitude = $request->latitude;
            // $point->longitud = $request->longitud;
            // $point->description = $request->description;
            $point->name = $request->name;
            $point->save();
        }
        return response()->json($point);
    }

    public function getPoints($id)
    {
        $point = point::where('FK_id_provider', $id)->get();
        return response()->json($point);
    }

    public function delete($id)
    {
        $point = point::where('id', $id)->first();

        if ($point) {
            $point->delete();
            return response()->json(['message' => 'Registro eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No se encontraron registros para eliminar'], 404);
        }
    }
}
