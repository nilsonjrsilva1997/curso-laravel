<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'rua',
        'cidade',
        'estado',
        'numero',
        'user_id',
        'bairro'
    ];

    protected $table = 'addresses';
}
