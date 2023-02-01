@extends('welcome')
@section('contenido')
    <h1>Hola desde edit</h1>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Actualizacion de Candidatos</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('candidatos.update', $candidatos->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Ingrese nombre del candidato:</label>
                                    <input type="text" class="form-control" name="nombres" value="{{$candidatos->nombres}}">
                                </div>
                                <div class="form-group">
                                    <label >Ingrese su numero de cedula:</label>
                                    <input type="text" class="form-control" name="cedula" value="{{$candidatos->cedula}}">
                                </div>
                                <div class="form-group">
                                    <label >Ingrese partido politico:</label>
                                    <input type="text" class="form-control" name="partido" value="{{$candidatos->partido}}">
                                </div>
                                <div class="form-group">
                                    <label >Ingrese lista:</label>
                                    <input type="number" class="form-control" name="lista" value="{{$candidatos->lista}}">
                                </div>
                                <div class="form-group">
                                    <label >Ingrese votos</label>
                                    <input type="number" class="form-control"  name="votos" value="{{$candidatos->votos}}">
                                </div>
                                <div>
                                    <button class="btn btn-primary">Actualiza Datos</button>
                                </div>
                            </div>
                    </div>
                </div>
    </section>
@endsection
