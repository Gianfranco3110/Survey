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
        return encuesta::all();
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'titulo' => 'required'
        ]);

        encuesta::create($request->all());
        return;
    }

    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }

    public function destroy($id)
    {
        $encuesta = Encuesta::find($id);
        $encuesta->delete();
    }
    
}
