<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;

class NivelController extends Controller
{

    public function index()
    {
        $nivels = Nivel::all();
        return view('nivels.index')->with('nivels', $nivels);
    }

    public function create()
    {
        return view('nivels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|min:2|max:255',
        ]);

        Nivel::create($request->all());

        return redirect()->route('nivels.index')->with('success', 'Nível criado com sucesso!');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
