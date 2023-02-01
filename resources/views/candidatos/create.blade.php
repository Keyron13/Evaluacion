@extends('welcome')
@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Candidato</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('candidatos.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">
                                <label >Nombre del candidato:</label>
                                <input type="text" class="form-control" name="nombres">
                            </div>
                            <div class="form-group">
                                <label >Ingrese cedula:</label>
                                <input type="text" class="form-control" name="cedula">
                            </div>
                            <div class="form-group">
                                <label >Ingrese partido politico:</label>
                                <input type="text" class="form-control" name="partido">
                            </div>
                            <div class="form-group">
                                <label >Numero de lista:</label>
                                <input type="number" class="form-control" name="lista">
                            </div>
                            <div class="form-group">
                                <label >Votos:</label>
                                <input type="number" class="form-control" name="votos">
                            </div>
                            <div >
                               <button class="btn btn-primary">Registrar Dato</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
