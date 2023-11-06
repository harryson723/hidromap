@extends('partials.main')

@section('content')
<div class="form-container">

    <div class="form-img">

        <form class="form-form" action="{{ route('user') }}" method="POST">
            
            <div class="maskop"></div>
            @csrf

            @if (session('success'))

            @endif

            @error('name')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="name" class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su usuario o correo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Ingrese su contraseña">
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Ingresar">
            <a class="btn btn-primary mt-3" href="/register">Registrarse</a>
        </form>
    </div>
</div>
@endsection