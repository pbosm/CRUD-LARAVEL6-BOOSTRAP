<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //especificando os campos que vamos utilizar.
    protected $fillable = ['nome', 'valor', 'estoque'];
}
