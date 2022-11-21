<?php

namespace App\People\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'cpf', 'celular', 'logradouro', 'cep'];
}
