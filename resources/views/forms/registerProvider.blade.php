@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese su usuario o correo">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Telefono:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Registrar">
        </form>
        <div class="form-img">
            <img src="{!! asset('images/formImg.jpg') !!}" alt="" srcset="">
        </div>
    </div>
@endsection
