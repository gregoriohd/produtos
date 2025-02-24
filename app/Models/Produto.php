<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos'; // Nome da tabela no banco

    protected $fillable = ['nome', 'preco']; // Campos permitidos para atribuição em massa

    public $timestamps = true; // Ativa as colunas created_at e updated_at
}
