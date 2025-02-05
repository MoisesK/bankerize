<?php

namespace App\Shared\Infra\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'birth_date',
        'email'
    ];
}
