<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    /*
    protected $preenchivel = ['nome','descricao','quantidade','preco'];
    protected $guardado = ['id', 'created_at', 'update_at'];
    protected $tabela = 'produtos';
    */
    protected $fillable = [
        'nome', 'descricao', 'quantidade', 'preco'
    ];
}
