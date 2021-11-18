<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamados_categorias extends Model
{
    use HasFactory;

    protected $table = 'chamados_categorias';

    protected $fillable = [
        'categoria',
        'bg_color',
    ];

    public function chamados(){
        return $this->hasMany(Chamados::class);
    }
}
