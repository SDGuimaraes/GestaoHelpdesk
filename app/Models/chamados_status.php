<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamados_status extends Model
{
    use HasFactory;

    protected $table = 'chamados_status';

    protected $fillable = [
        'status',
        'bg_color',
    ];

    public function chamados(){
        return $this->hasMany(Chamados::class);
    }
}
