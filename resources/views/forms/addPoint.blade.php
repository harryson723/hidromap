@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ingresa el nombre:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Latitud:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Longitud:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descripción:</label>
                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña"></textarea>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Crear punto">
        </form>
        <div class="form-img">
            <img src="{!! asset('images/formImg.jpg') !!}" alt="" srcset="">
        </div>
    </div>
@endsection
