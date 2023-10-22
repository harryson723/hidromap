@extends('partials.main')

@section('content')
    <div class="form-container">
        <form class="form-form" action="{{ route('providers') }}" method="POST">
            @csrf
            @if (session('success'))
            <h6 class="alert alert">{{ $message }}</h6>
            @endif
            @error('id')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('address')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('phone')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Usuario:</label>
                <select type="text" class="form-control" id="name" name="name">
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" id="email"
                    placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefono:</label>
                <input type="text" class="form-control" name="phone" id="phone"
                    placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="address" id="address"
                    placeholder="Ingrese su contraseña">
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Registrar">
        </form>
        <div class="form-img">
            <img src="{!! asset('images/formImg.jpg') !!}" alt="" srcset="">
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/getUsers.js') !!}"></script>
@endsection
