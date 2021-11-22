<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

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
        return view('home');
    }



    public function configInicial(){

        $homes = Home::all();

        return view('config.Home.home',[ 'homes' => $homes ]);
    }

    public function configInicialSalvar(Request $request, $id){
        $home = Home::find($id);
        $home->titulo = $request->input('titulo');
        $home->subtitulo = $request->input('subtitulo');
        $home->bgcor1 = $request->input('bgcor1');
        $home->bgcor2 = $request->input('bgcor2');
        $home->txcor = $request->input('txcor');
        $home->save();

        return redirect()->back()->with('status', 'Configurações Alteradas');
    }
}
