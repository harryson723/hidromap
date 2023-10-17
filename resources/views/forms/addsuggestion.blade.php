@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nombre:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email:</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Descripción:</label>
                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su contraseña"></textarea>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Enviar">
        </form>
        <div class="form-img">
            <img src="{!! asset('images/formImg.jpg') !!}" alt="" srcset="">
        </div>
    </div>
@endsection
