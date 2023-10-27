@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Contraseña actual:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nueva contraseña:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Repetir nueva contraseña:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Cambiar contraseña">
        </form>
        <div class="form-img">
        </div>
    </div>
@endsection
