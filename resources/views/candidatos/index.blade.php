@extends('welcome')
@section('contenido')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">CANDIDATOS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th>#</th>
              <th>NOMBRE</th>
              <th>CEDULA</th>
              <th>PARTIDO POLITICO</th>
              <th>LISTA</th>
              <th>VOTOS</th>
              <th>INTERACCIONES</th>
            </tr>
            </thead>
            <tbody class="text-center">
                @forelse ($candidatos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombres}}</td>
                    <td>{{$item->cedula}}</td>
                    <td>{{$item->partido}}</td>
                    <td>{{$item->lista}}</td>
                    <td>{{$item->votos}}</td>
                     <td class="d-flex justify-content-center">
                        <a href="{{route('candidatos.edit',$item->id)}}" class="btn btn-primary ">Editar</a>
                        <form action="{{route('candidatos.delete',$item->id)}}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2 ">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection
