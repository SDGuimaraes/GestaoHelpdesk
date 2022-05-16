<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteSetor extends Model
{
    use HasFactory;

    protected $table ='cliente_setores';

    protected $fillable = [
        'nome',
    ];

    public function clientes(){
        return $this->hasMany(Cliente::class, 'setores_id', 'id');
    }
}
