<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiatesController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return redirect()->route('estudiantes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idEstu' => 'required|string|max:12|unique:estudiantes,idEstu',
            'nombreEstu' => 'required|string|max:50',
            'apellidoEstu' => 'required|string|max:50',
            'nombreAcu' => 'required|string|max:50',
            'apellidoAcu' => 'required|string|max:50',
            'telefono' => 'required|string|max:10',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado correctamente');
    }

    public function show(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, string $idEstu)
    {
        $request->validate([
            'nombreEstu' => 'required|string|max:50',
            'apellidoEstu' => 'required|string|max:50',
            'nombreAcu' => 'required|string|max:50',
            'apellidoAcu' => 'required|string|max:50',
            'telefono' => 'required|string|max:10',
        ]);

        $estudiante = Estudiante::findOrFail($idEstu);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado');
    }

    public function destroy(string $idEstu)
    {
        $estudiante = Estudiante::findOrFail($idEstu);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudianete elimnado');
    }
}
