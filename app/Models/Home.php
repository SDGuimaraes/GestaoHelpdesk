<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'inicioconfigs';

    protected $fillable = ['titulo', 'subtitulo', 'bgcor1', 'bgcor2', 'txcor'];
}
