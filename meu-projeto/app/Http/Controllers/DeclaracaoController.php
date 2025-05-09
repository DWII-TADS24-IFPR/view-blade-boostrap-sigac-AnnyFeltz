<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Declaracao;

class DeclaracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $declaracoes = Declaracao::all();
        return view('declaracoes.index')->with('declaracoes', $declaracoes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('declaracoes.create');
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

        Declaracao::create($request->all());

        return redirect()->route('declaracoes.index')->with('success', 'Declaração criada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $declaracao = Declaracao::findOrFail($id);
        return view('declaracoes.show')->with('declaracao', $declaracao);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $declaracao = Declaracao::findOrFail($id);
        return view('declaracoes.edit')->with('declaracao', $declaracao);
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

        $declaracao = Declaracao::findOrFail($id);
        $declaracao->update($request->all());

        return redirect()->route('declaracoes.index')->with('success', 'Declaração atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $declaracao = Declaracao::findOrFail($id);
        $declaracao->delete();

        return redirect()->route('declaracoes.index')->with('success', 'Declaração excluída com sucesso.');
    }
}
