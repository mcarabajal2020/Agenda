@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar Contacto')
    
@section('contenido')
    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Eliminar Contacto</h2>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-danger" role="alert">
                                   Estas seguro de eliminar este registro? 
                                   <p>Una vez borrado no se podra recuperar!</p>
                                   <table class="table table-sm">
                                    <thead>
                                        <th>Apellido</th>
                                        <th>Nombre</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$contacto->paterno}} {{$contacto->materno}}</td>
                                            <td>{{$contacto->nombre}}</td>
                                        </tr>
                                    </tbody>
                                   </table>
                                   <hr>
                                   <form action="{{route('contactos.destroy', $contacto->id_contacto)}}" method="POST">
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