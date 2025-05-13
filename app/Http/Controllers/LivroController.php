<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $data = $request->all();

    if ($request->hasFile('imagem')) {
        $data['imagem'] = $request->file('imagem')->store('livros', 'public');
    }

    Livro::create($data);
    return redirect()->route('livros.index')->with('success', 'Livro cadastrado!');
}


    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
{
    $data = $request->all();

    if ($request->hasFile('imagem')) {
        // Opcional: deletar imagem anterior
        if ($livro->imagem && \Storage::disk('public')->exists($livro->imagem)) {
            \Storage::disk('public')->delete($livro->imagem);
        }

        $data['imagem'] = $request->file('imagem')->store('livros', 'public');
    }

    $livro->update($data);
    return redirect()->route('livros.index')->with('success', 'Livro atualizado!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index')->with('success', 'Livro removido');
    }
}
