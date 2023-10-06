@extends('partials.main')

@section('content')
    <form action="">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese su usuario o correo">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Contraseña:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            <input class="btn btn-primary mt-3" type="submit" value="Ingresar">
        </div>
    </form>
@endsection
