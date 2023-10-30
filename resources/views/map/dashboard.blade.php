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
    <script src="{!! asset('js/addPoints.js') !!}"></script>
@endsection
