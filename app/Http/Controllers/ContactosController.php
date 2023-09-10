<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contactos;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = Contactos::all();
        return view('contactos/inicio', compact('contacto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('contactos/agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = new Contactos();
        $contacto->categoria_id = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->paterno = $request->post('paterno');
        $contacto->materno = $request->post('materno');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('correo');
        $contacto->save();
        return redirect()->route('contactos.index')->with('success', 'Contacto Creada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Contactos::find($id);
        return view('contactos/eliminar',compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Contactos::find($id);
        $categorias = Categoria::all();
        return view('contactos/editar', compact('contacto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $contacto = new Contactos();
        $contacto->categoria_id = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->paterno = $request->post('paterno');
        $contacto->materno = $request->post('materno');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('correo');
        $contacto->save();
        return redirect()->route('contactos.index')->with('success', 'Contacto Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacto = Contactos::find($id);
        $contacto -> delete();
        return redirect()->route('contactos.index')->with('success', 'Contacto Eliminado');
    }
}
