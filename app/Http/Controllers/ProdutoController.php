<?php

namespace App\Http\Controllers;

use App\Service\ProdutoService;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $produtoService;

    public function __construct(ProdutoService $produtoService)
    {
        $this->produtoService = $produtoService;
    }

    public function precoMinimo(Request $request)
    {
        $precoMinimo = $request->query('preco_minimo'); // Recebe um filtro opcional da URL
        return response()->json($this->produtoService->listarProdutosFiltrados($precoMinimo));
    }

    public function index()
    {

        return response()->json($this->produtoService->listarTodos());
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
