<?php

namespace App\Http\Controllers;

use App\Models\TiposDocumento;
use Illuminate\Http\Request;

class TiposDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TiposDocumento $tiposDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TiposDocumento $tiposDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TiposDocumento $tiposDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TiposDocumento $tiposDocumento)
    {
        //
    }
    public function listar($id)
    {
        $tipo_documento=TiposDocumento::find($id);
        
        return view('cliente.listado',[
            'tipo_documento'=>$tipo_documento,
            'clientes'=>$tipo_documento->clientes
        ]);
    }
}
