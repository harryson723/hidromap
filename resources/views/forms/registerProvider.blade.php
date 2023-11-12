@extends('partials.main')

@section('content')
    <div class="form-container">
        <div class="form-img">
            <form class="form-form" action="{{ route('providers') }}" method="POST">
                <div class="maskop"></div>
                @csrf
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
                        placeholder="Ingrese su correo">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                        placeholder="Ingrese su numero de telefono">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="Ingrese su direccion">
                </div>
                <input type="text" class="hidden" name="rol" value="proveedor">
                <input class="btn btn-primary mt-3" type="submit" value="Registrar">
            </form>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/getUsers.js') !!}"></script>
@endsection
