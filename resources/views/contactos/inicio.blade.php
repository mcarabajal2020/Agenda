@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')
    
@section('contenido')
    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Contactos</h2>
                                <a href="{{route('contactos.create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar Nuevo Contacto</a>
                                
                                <hr>
                                @if ($mensaje = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{$mensaje}}    
                                    </div>      
                                @endif         
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                               <table class="table table-sm table-bordered" id="tablaContactos">
                                <thead>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($contacto as $item)
                                    <tr>
                                        <td>{{$item->paterno}}</td>
                                        <td>{{$item->materno}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->categorias->nombre}}</td>
                                        <td><a href="{{route('contactos.edit', $item->id_contacto)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
                                        <td><a href="{{route('contactos.show', $item->id_contacto)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
    </div>
@endsection
@section('dataTable')
    <script>
        $(document).ready(function(){
            $('#tablaContactos').DataTable();
        });
    </script>
@endsection