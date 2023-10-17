@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endsection

@section('content')
    <div id="app">
        <div class="section-main">
            <h1>HIDROMAP</h1>
            <button>USUARIO</button>
        </div>
        <div id="map" style="width: 80%; height: 600px;"></div>
    </div>
@endsection

@section('scripts')
    <script>
        // Crea un mapa en el contenedor con ID 'map'
        const map = L.map('map').setView([4.3095, -74.3005], 16);

        // Agrega una capa de OpenStreetMap al mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([4.3095, -74.3005]).addTo(map); // Coordenadas del marcador
        marker.bindPopup("<b>Este es un marcador con información.</b>");
    </script>
@endsection
