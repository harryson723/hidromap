@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="{{ route('postSuggestion') }}" method="POST">
            @csrf

            
            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            
            @error('email')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            
            @error('comment')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su email">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Descripción:</label>
                <textarea class="form-control" id="comment" name="comment" placeholder="Ingrese su contraseña"></textarea>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Enviar">
        </form>
        <div class="form-img">
            <img src="{!! asset('images/formImg.jpg') !!}" alt="" srcset="">
        </div>
    </div>
@endsection
