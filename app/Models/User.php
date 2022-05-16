<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table ="users";
    

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'sexo',
        'cpf',
        'img',
        'ddd',
        'telefone',
        'cliente_id',
        'status_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function chamados(){
        return $this->hasMany(Chamados::class, 'user_id', 'id');
    }
    public function status(){
        return $this->belongsTo(UserStatus::class,'status_id', 'id');
    }
    public function clientes(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
