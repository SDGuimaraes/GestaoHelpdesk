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
    public function index(Request $request)
    {
        redirect()->route('principal');
    }

    
}
