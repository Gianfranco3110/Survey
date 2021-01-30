<?php

namespace App\Http\Controllers;

use App\Models\Opcion;
use App\Models\User;
use Illuminate\Http\Request;

class OpcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    
        $opcion = new Opcion;
        $opcion->valor = $request->valor;
        $opcion->user_id = $request->user_id;
        $opcion->encuestas_id = $request->encuestas_id;
        $opcion->save();
        
        $user = User::find(Request('user_id'));
        $user->estatus = 'yes';
        $user-> save();

        return;
    }


    public function show(Opcion $opcion)
    {
        //
    }

    public function edit(Opcion $opcion)
    {
        //
    }

   
    public function update(Request $request, Opcion $opcion)
    {
        //
    }

   
    public function destroy(Opcion $opcion)
    {
        //
    }
}
