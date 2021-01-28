<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuesta = Encuesta::all();
        return $encuesta;
    }

    public function store(Request $request)
    {
        $encuesta = new Encuesta();
        $encuesta->titulo = $request->titulo;
        $encuesta->save();
    }

    public function update(Request $request, Encuesta $encuesta)
    {
        $encuesta = Encuesta::findOrFail($request->id);
        $encuesta->titulo = $request->titulo;
        $encuesta->save();
        return $encuesta;
        //Esta función actualizará la tarea que hayamos seleccionado
    }

    public function show(Request $request)
    {
        $encuesta = Encuesta::findOrFail($request->id);
        return $encuesta;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function destroy(Request $request)
    {
        $encuesta = Encuesta::destroy($request->id);
        return $encuesta;
    }    
}
