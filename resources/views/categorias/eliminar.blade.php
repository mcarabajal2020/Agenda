@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar Categoria')
    
@section('contenido')
    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Eliminar Categoria</h2>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                   Estas seguro de eliminar este registro? 
                                   <p>Una vez borrado no se podra recuperar!</p>
                                   <table class="table table-sm">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$categorias->nombre}}</td>
                                            <td>{{$categorias->descripcion}}</td>
                                        </tr>
                                    </tbody>
                                   </table>
                                   <hr>
                                   <form action="{{route('categorias.destroy', $categorias->id_categoria)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
    </div>
@endsection