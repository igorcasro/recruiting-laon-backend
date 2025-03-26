<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'is_admin',
        'nome_completo',
        'email',
        'senha',
        'status',
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    // This code automatically converts data types when acessing the attributes
    // Needs to verify if its needed
    // protected $casts = [
    //     'is_admin' => 'boolean',
    // ];
}
