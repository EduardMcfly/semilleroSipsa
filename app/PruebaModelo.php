<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PruebaModelo extends Model
{
    protected $table = 'tabla_prueba';
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

}
