<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteSetor;
use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $usuario = User::all();
        $status = UserStatus::all();
        $clientes = Cliente::all();
        $setores = ClienteSetor::all();

        return view('config.usuarios.usuarios', [
            'usuario' => $usuario,
            'status' => $status,
            'clientes' => $clientes,
            'setores' => $setores,
        ]);
    }
}
