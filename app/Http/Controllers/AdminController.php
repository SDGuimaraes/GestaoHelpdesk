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
        $home->c1titulo = $request->input('c1titulo');
        $home->c1subtitulo = $request->input('c1subtitulo');
        $home->c2titulo = $request->input('c2titulo');
        $home->c2subtitulo = $request->input('c2subtitulo');
        $home->c3titulo = $request->input('c3titulo');
        $home->c3subtitulo = $request->input('c3subtitulo');
        $home->c4titulo = $request->input('c4titulo');
        $home->c4subtitulo = $request->input('c4subtitulo');
        $home->save();

        return redirect()->back()->with('status', 'Configurações Alteradas');
    }
}
