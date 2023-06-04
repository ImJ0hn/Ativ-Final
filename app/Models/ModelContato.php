<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelContato extends Model
{
    use HasFactory;

    protected $table = 'Contatos';
    protected $fillable = ['nome' , 'email', 'telefone'];
}
