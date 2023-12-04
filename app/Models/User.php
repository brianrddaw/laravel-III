<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellidos',
        'f_nacimiento',
    ];

}

