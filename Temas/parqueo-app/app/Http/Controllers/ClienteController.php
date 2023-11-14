<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\TiposDocumento;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $clientes = Cliente::all();
        return view('cliente.index', [
            'clientes' => $clientes
        ]);
        


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos_documentos=TiposDocumento::all();
       return view('cliente.create',[
              'tipos_documentos' => $tipos_documentos
         ]
       );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        return redirect()->route('cliente.index');
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('cliente.show',[
            'cliente' => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit',[
            'cliente' => $cliente
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $input = $request->all();
        $cliente->update($input);
        return  view('cliente.show', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');

    }
}
