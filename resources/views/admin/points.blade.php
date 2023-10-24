@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/points.css') }}">
@endsection

@section('content')
    <div id="app">
        <h1>SISTEMAS DE RIEGO</h1>
        <div class="cards-container">
            
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const idProvider = @json(session('id'));
    </script>
    <script src="{!! asset('js/getPoints.js') !!}"></script>
@endsection
