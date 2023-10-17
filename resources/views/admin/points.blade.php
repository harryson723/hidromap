@extends('partials.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/points.css') }}">
@endsection

@section('content')
    <div id="app">
        <h1>SISTEMAS DE RIEGO</h1>
        <div class="cards-container">
            <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>UBICACION: </span>
                        <span>DIRECCION: </span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: </span>
                        <span>CORREO: </span>
                    </div>
                    <div class="card-img">
                        <img src="{{ asset('images/formImg.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>
            <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>UBICACION: </span>
                        <span>DIRECCION: </span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: </span>
                        <span>CORREO: </span>
                    </div>
                    <div class="card-img">
                        <img src="{{ asset('images/formImg.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>
            <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>UBICACION: </span>
                        <span>DIRECCION: </span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: </span>
                        <span>CORREO: </span>
                    </div>
                    <div class="card-img">
                        <img src="{{ asset('images/formImg.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>
            <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>UBICACION: </span>
                        <span>DIRECCION: </span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: </span>
                        <span>CORREO: </span>
                    </div>
                    <div class="card-img">
                        <img src="{{ asset('images/formImg.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>
            <div class="card">
                <div class="card-detail">
                    <div class="card-info">
                        <span>UBICACION: </span>
                        <span>DIRECCION: </span>
                        <span>INFORMACIÓN DE CONTACTO: </span>
                        <span>TELEFONO: </span>
                        <span>CORREO: </span>
                    </div>
                    <div class="card-img">
                        <img src="{{ asset('images/formImg.jpg') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="card-options">
                    <button>EDITAR</button>
                    <button>ELIMINAR</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
@endsection
