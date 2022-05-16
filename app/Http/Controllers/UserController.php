<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $usuario = User::all();

        return view('config.usuarios.usuarios', [
            'usuario' => $usuario,
        ]);
    }
}
