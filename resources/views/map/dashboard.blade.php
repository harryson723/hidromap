@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endsection

@section('content')
    <div id="app">
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>
@endsection

@section('scripts')
    <script>
        // Crea un mapa en el contenedor con ID 'map'
        var map = L.map('map').setView([51.505, -0.09], 13);

        // Agrega una capa de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Puedes agregar marcadores, polígonos y más aquí
    </script>
@endsection
