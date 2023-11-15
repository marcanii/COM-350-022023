<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Editorial;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', [
            'libros' => $libros
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editoriales=Editorial::all();
        return view('libros.create',[
               'editoriales' => $editoriales
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit',[
            'libro' => $libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $input = $request->all();
        $libro->update($input);
        $libros = Libro::all();
        return view('libros.index', [
            'libros' => $libros
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
