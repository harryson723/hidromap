@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{!! asset('css/points.css') !!}">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endsection

@section('content')
    <div class="form-container">
        <form class="form-form" action="{{ route('point') }}" method="POST">
            @csrf
            @error('latitude')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('longitud')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('description')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Ingresa el nombre:</label>
                <input type="text" class="form-control" name="name" id="name"
                    placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitud:</label>
                <input type="text" class="form-control" name="latitude" id="latitude"
                    placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="longitud" class="form-label">Longitud:</label>
                <input type="text" class="form-control" name="longitud" id="longitud"
                    placeholder="Ingrese su contraseña">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea class="form-control" name="description" id="description" placeholder="Ingrese su contraseña"></textarea>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Crear punto">
            @php
                echo '<input type="text" class="hidden" name="FK_id_provider" id="FK_id_provider" value="' . session('id') . '">';
            @endphp
        </form>
        <div class="form-img">
        </div>
    </div>
    <div id="map" style="width: 80%; height: 600px;"></div>
@endsection

@section('scripts')
    <script>

        // Crea un mapa en el contenedor con ID 'map'
        const map = L.map('map').setView([4.3095, -74.3005], 16);

        // Agrega una capa de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker;

        map.on('click', function(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            var latlng = e.latlng;
            marker = L.marker(latlng).addTo(map);
            document.getElementById('latitude').value = latlng.lat;
            document.getElementById('longitud').value = latlng.lng;
        });
    </script>
@endsection
