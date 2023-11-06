@extends('partials.main')

@section('content')
    <div class="form-container">
        <div class="form-img">
            <form class="form-form" action="{{ route('users') }}" method="POST">
                <div class="maskop"></div>
                @csrf
                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('email')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('password')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="mb-3">
                    <label for="name" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" name="name" id="name"
                        placeholder="Ingrese su usuario o correo">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" id="email"
                        placeholder="Ingrese su contraseña">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Ingrese su contraseña">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Repetir contraseña:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Ingrese su contraseña">
                </div>
                <input class="btn btn-primary mt-3" type="submit" value="Registrar">
                <a href="/">Iniciar sesión</a>
                <input type="text" class="hidden" name="rol" id="rol" value="usuario">
            </form>
            <div class="form-img">
            </div>
        </div>
    </div>
@endsection
