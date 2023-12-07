<?php

namespace App\Http\Controllers;

use App\Models\Destinatario;
use App\Models\Correspondencia;
use Illuminate\Http\Request;

class CorrespondenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Correspondencias = Correspondencia::all();
        return view('corresp.index', [
            'correspondencias' => $Correspondencias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinatarios=Destinatario::all();
        return view('corresp.create',[
               'destinatarios' => $destinatarios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input);
        Correspondencia::create($input);
        return redirect()->route('corresp.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Correspondencia $corresp)
    {
        return view('corresp.show',[
            'correspondencia' => $corresp
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Correspondencia $corresp)
    {
        //dd($correspondencia);
        $destinatarios=Destinatario::all();
        return view('corresp.edit',[
            'correspondencia' => $corresp,
            'destinatarios' => $destinatarios
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Correspondencia $corresp)
    {
        $input = $request->all();
        $corresp->update($input);
        $correspondencias = Correspondencia::all();
        return view('corresp.index', [
            'correspondencias' => $correspondencias
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Correspondencia $corresp)
    {
        //dd($correspondencia);
        $corresp->delete();
        return redirect()->route('corresp.index');
    }
}
