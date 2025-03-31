<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
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

    protected $attributes = [
        'is_admin' => false,
        'status' => 'ativo'
    ];

    // This code automatically converts data types when acessing the attributes
    // Needs to verify if its needed
    // protected $casts = [
    //     'is_admin' => 'boolean',
    // ];
}
