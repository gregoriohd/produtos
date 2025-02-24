<?php

namespace App\Service;

use App\Models\Produto;

class ProdutoService
{


    public function listarProdutosFiltrados($precoMinimo = null)
    {
        return Produto::select('id', 'nome', 'preco') // Seleciona os campos desejados
            ->when($precoMinimo, function ($query, $precoMinimo) {
                return $query->where('preco', '>=', $precoMinimo); // Aplica o filtro se o parâmetro existir
            })
            ->orderBy('nome', 'asc') // Ordena por nome
            ->get();
    }

    public function listarTodos()
    {
        return Produto::orderBy('nome', 'asc')->get();
    }

    public function buscarPorId($id)
    {
        return Produto::findOrFail($id);
    }

    public function criar(array $dados)
    {
        return Produto::create($dados);
    }

    public function atualizar($id, array $dados)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($dados);
        return $produto;
    }

    public function deletar($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return response()->json(['message' => 'Produto removido com sucesso']);
    }
}
