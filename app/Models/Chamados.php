<?php

namespace App\Models;

use ChamadosCategorias;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $table ="chamados";

    protected $fillable = [
        'id',
        'token',
        'titulo',
        'nome',
        'email',
        'desc',
        'categoria_id',
        'status_id',
        'anexo',
    ];

    public function categoria_id(){
        return $this->belongsTo(chamados_categorias::class);
    }
    public function status_id(){
        return $this->belongsTo(chamados_status::class);
    }
}
