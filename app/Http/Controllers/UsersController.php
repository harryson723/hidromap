<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'rol' => 'required',
            'password' => 'required|min:8|confirmed|password_complexity',
            // Utiliza la nueva regla 'password_complexity'
        ]);
        $user = new users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rol = $request->rol;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success:', 'Usuario creado exitosamente');
    }
    public function login(Request $request)
    {
        $user = users::where('name', $request->name)->select('id', 'name', 'password', 'rol')->first();
        if ($user) {
            if (password_verify($request->password, $user->password)) {
                session()->put([
                    'success' => 'Usuario con credenciales correctas',
                    'rol' => $user->rol,
                    'id' => $user->id
                ]);
                if ($user->rol == 'usuario') {
                    return redirect()->route('dashboard')->with('success:', 'Usuario con credenciales correctas');
                } else if ($user->rol == 'proveedor') {
                    return redirect()->route('points')->with('success:', 'Usuario con credenciales correctas');
                } else if ($user->rol == 'admin') {
                    return redirect()->route('usersAdmin')->with('success:', 'Usuario con credenciales correctas');
                } 

            }
        }
        return redirect()->route('login')->with('fail:', 'Usuario incorrecto');
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect()->route('login')->with('success:', 'sesion cerrada');
    }

    public function getUsers(Request $request)
    {
        $user = users::where('rol', 'usuario')->select('id', 'name', 'email', 'rol')->get();
        return response()->json($user);
    }

    public function updateRol($id, $rol)
    {
        $user = users::find($id);
        if ($user) {
            $user->rol = $rol;
            $user->save();
        }
        return redirect()->route('registerProvider')->with('success:', 'Usuario creado exitosamente');
    }

    public function getUser($id)
    {
        $user = users::where('id', $id)->first();
        return response()->json($user);
    }

    public function delete($id)
    {
        $user = users::where('id', $id)->first();

        if ($user) {
            $user->delete();
            return response()->json(['message' => 'Registro eliminado correctamente']);
        } else {
            return response()->json(['message' => 'No se encontraron registros para eliminar'], 404);
        }
    }


}
