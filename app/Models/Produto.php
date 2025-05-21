<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    // Aqui você lista os campos que poderão ser preenchidos via mass assignment
    protected $fillable = [
        'nome',
        'descricao',
        'quantidade',
        'preco',
        'nota_avaliacao',
        'imagem',
        'user_id', // se estiver vinculando o produto ao usuário autenticado
    ];
}
