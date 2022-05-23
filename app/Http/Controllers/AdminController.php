<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use App\Models\chamados_status;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 
        //contagem de numero de chamados

        $cha = Chamados::all();
        $chamados = count($cha);
        // pegando todos usuarios

        $usuarios = User::all();
        //contagem de chamados em base do filtro

        $conc = Chamados::where('status_id',3)->get();
        $concluido = count($conc);
        //calculo para diminuir o total de chamados pelos concluidos

        $chama = $chamados - $concluido;
        //passando a porcentagem de chamados e medir o aproveitamento 

        $porcentagem = (( $concluido/ $chamados)*100);

        $porc = round($porcentagem, 2);

        return view('home',[
            'chamados' => $chamados,
            'usuarios' => $usuarios,
            'concluido' => $concluido,
            'chama' => $chama,
            'porc' => $porc
        ]);
    }




}
