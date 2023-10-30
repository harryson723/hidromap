<?php

namespace App\Http\Controllers;

use App\Models\suggestions;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'email' => 'required',
        ]);

        $suggestion = new suggestions;
        $suggestion->comment = $request->comment;
        $suggestion->email = $request->email;
        $suggestion->name = $request->name;
        $suggestion->save();

        return redirect()->route('dashboard')->with('success:', 'sugerencia creada exitosamente');
    }

    public function get()
    {
        $points = suggestions::all();
        return response()->json($points);
    }
}
