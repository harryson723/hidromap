@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="../../../public/css/vmap.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endsection

@section('content')
    <div class="hidromap" id="app">
        <div class="map-main">
            <h1>HIDROMAP</h1>
        </div>
        <div class="vmap" id="map" style="width: 100%; height: 93vh;"></div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/addPoints.js') !!}"></script>
@endsection
