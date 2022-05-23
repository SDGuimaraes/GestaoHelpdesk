<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteSetor;
use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
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
    public function update(Request $request, $id){

        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->ddd = $request->input('ddd');
        $usuario->telefone = $request->input('telefone');
        $usuario->cpf = $request->input('cpf');
        $usuario->sexo = $request->input('sexo');
        $usuario->save();

        return redirect()->back()->with('status', 'Seu perfil foi Atualizado!');
            
    }
    public function perfil(){

        $usuario = Auth::user();

        $user = User::find($usuario);
        $setor = ClienteSetor::find($usuario);
        $clientes = Cliente::find($usuario);
        $status = UserStatus::find($usuario);
        
        

        return view('perfil.perfil',[
            'user' => $user,
            'setor' => $setor,
            'clientes' => $clientes,
            'status' => $status,
            'usuario' => $usuario,
        ]);
    }
}
