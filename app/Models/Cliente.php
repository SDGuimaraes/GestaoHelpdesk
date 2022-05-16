<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table ='clientes';  

    protected $fillable=[
        'nome',
        'razao_social',
        'cpf_cnpj',
        'img_perfil',
        'setores_id'
    ];

    public function usuarios(){
        return $this->hasMany(User::class, 'cliente_id', 'id');
    }
    public function setores(){
        return $this->belongsTo(ClienteSetor::class, 'setores_id', 'id');
    }

}
