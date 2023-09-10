@extends('layouts/agenda')

@section('tituloPagina', 'Agregar Contacto')
    
@section('contenido')
    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Agregar nuevo Contacto</h2>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                              <form action="{{route('contactos.store')}}" method="POST">
                                @csrf
                                @method('POST')
                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select" required>
                                    <option value="">-- Seleccione Categoria --</option>
                                   @foreach ($categorias as $item)
                                       <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                                   @endforeach
                                </select>
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" required>
                                <label for="materno">Apellido Materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" required>
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                                <label for="correo">Correo Electronico</label>
                                <input type="text" class="form-control" id="correo" name="correo" required>
                                <br>
                                <button class="btn btn-primary">Agregar</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
    </div>
@endsection