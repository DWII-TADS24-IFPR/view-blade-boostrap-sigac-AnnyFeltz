<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprovante;

class ComprovanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comprovantes = Comprovante::all();
        return view('comprovantes.index')->with('comprovantes', $comprovantes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comprovantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        Comprovante::create($request->all());

        return redirect()->route('comprovantes.index')->with('success', 'Comprovante criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        return view('comprovantes.show')->with('comprovante', $comprovante);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        return view('comprovantes.edit')->with('comprovante', $comprovante);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
        ]);

        $comprovante = Comprovante::findOrFail($id);
        $comprovante->update($request->all());

        return redirect()->route('comprovantes.index')->with('success', 'Comprovante atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $comprovante->delete();

        return redirect()->route('comprovantes.index')->with('success', 'Comprovante excluído com sucesso.');
    }
}
