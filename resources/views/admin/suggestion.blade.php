@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/points.css') }}">
@endsection

@section('content')
    <div id="app">
        <h1>SUGERENCIAS</h1>
        <div class="cards-container"></div>
    </div>
@endsection

@section('scripts')
<script src="{!! asset('js/getSuggestions.js') !!}"></script>
@endsection
