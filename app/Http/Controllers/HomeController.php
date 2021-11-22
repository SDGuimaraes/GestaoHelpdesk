<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use App\Models\chamados_categorias;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homes = Home::all();
        $categorias = chamados_categorias::all();
        $chamados = Chamados::all();
        return view('Home.inicio', ['categorias' => $categorias, 'homes' => $homes, 'chamados' => $chamados]);
    }


    public function criarChamado(Request $request){

        $chamados = new Chamados();
        $chamados->titulo = $request->input('titulo');
        $chamados->token = uniqid("#");
        $chamados->nome = $request->input('nome');
        $chamados->email = $request->input('email');
        $chamados->desc = $request->input('desc');
        $chamados->categoria_id = $request->input('categoria_id');
        if($request->hasfile('anexo')){
            $file = $request->file('anexo');
            $extention = $file->getClientOriginalExtension();
            $fillname = time().'.'.$extention;
            $file->move('assets/anexo/', $fillname);
            $chamados->anexo = $fillname;
        }
        $chamados->save();

        return redirect()->back()->with('status', 'Chamado criado com sucesso');
    }

    public function pesquisar(Request $request){


       $pesquisa = Chamados::where('token','=', $request->pesquisar);
       
       return view('Home.inicio',compact($pesquisa));
    }
    
}
