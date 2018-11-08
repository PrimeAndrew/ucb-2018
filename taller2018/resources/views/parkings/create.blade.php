
@extends('layouts.navbar')
@extends('layouts.menu')
@extends('layouts.app')



@section('content')
    <h1 class="text-center">Agregar Parqueos</h1>
    <hr>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container mb-5" >
        <form action="{{ route('parkings.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre del parqueo:</strong>
                        <input type="text" name="parking_name" class="form-control" placeholder="Introduzca el nombre del parqueo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Direccion del parqueo:</strong>
                        <textarea class="form-control"  name="parking_address" placeholder="Introduzca la direccion del parqueo"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Total de espacios:</strong>
                        <input type="text" name="total_spaces" class="form-control" placeholder="Introduzca el espacio del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora de apertura:</strong>
                        <input type="text" name="open_hour" class="form-control" placeholder="Introduzca la hora que de apertura del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora de cierre:</strong>
                        <input type="text" name="close_hour" class="form-control" placeholder="Introduzca la hora que de cierre del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Latitud del parqueo:</strong>
                        <input type="text" name="latitude" class="form-control" placeholder="Introduzca la latitud del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Longitud del parqueo:</strong>
                        <input type="text" name="longitud" class="form-control" placeholder="Introduzca la longitud del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                </div>
            </div>

        </form>
    </div>

@endsection