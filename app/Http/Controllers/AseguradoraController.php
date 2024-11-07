<?php

namespace App\Http\Controllers;

use App\Models\Aseguradora;
use Illuminate\Http\Request;

class AseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los registros
        $aseguradoras = Aseguradora::all();
        return view('aseguradoras.index', compact('aseguradoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aseguradoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'clave_aseguradora' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'fecha_inicial' => 'required|date',
            'fecha_final' => 'required|date',
            'no_seguro' => 'required|string|max:255',
        ]);

        // Crear un nuevo registro en la base de datos
        Aseguradora::create($request->all());

        // Redirigir al listado de aseguradoras con un mensaje de éxito
        return redirect()->route('aseguradoras.index')->with('success', 'Aseguradora creada con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Aseguradora $aseguradora)
    {
        // Retornar la vista con el registro de la aseguradora
        return view('aseguradoras.show', compact('aseguradora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aseguradora $aseguradora)
    {
        return view('aseguradoras.edit', compact('aseguradora'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aseguradora $aseguradora)
    {
        $request->validate([
            'clave_aseguradora' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'fecha_inicial' => 'required|date',
            'fecha_final' => 'required|date',
            'no_seguro' => 'required|string|max:255',
        ]);
    
        $aseguradora->update($request->all());
    
        return redirect()->route('aseguradoras.index')->with('success', 'Aseguradora actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aseguradora $aseguradora)
    {
        $aseguradora->delete();
        return redirect()->route('aseguradoras.index')->with('success', 'Aseguradora eliminada con éxito');
    }
}
