<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use App\Models\chamados_categorias;
use App\Models\chamados_status;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ChamadoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        
        $chamados = Chamados::all();
        $categorias = chamados_categorias::all();
        $status = chamados_status::all();

        return view('chamados.chamados',[
            'chamados' => $chamados,
            'categorias' => $categorias,
            'status' => $status,
            
        ]);
    }
    //chamados
    public function chamado_criar(Request $request){

        $chamados = new Chamados;
        $chamados->titulo = $request->input('titulo');
        $chamados->token = uniqid("#");
        $chamados->nome = $request->input('nome');
        $chamados->email = $request->input('email');
        $chamados->desc = $request->input('desc');
        $chamados->categoria_id = $request->input('categoria_id');
        if($request->hasfile('anexo')){
            $file = $request->file('anexo');
            $extention = $file->getClientOriginalExtension();
            $name = $file->getClientOriginalName();
            $fillname = $name.'.'.$extention;
            $file->move('assets/anexo/', $fillname);
            $chamados->anexo = $fillname;
        }
        $chamados->save();

        return redirect()->back()->with('status', 'Chamado criado com sucesso');
    }
    public function chamado_editar(Request $request, $id){

        $chamados = Chamados::find($id);
        $chamados->titulo = $request->input('titulo');
        $chamados->desc = $request->input('desc');
        $chamados->resp = $request->input('resp');
        $chamados->status_id = $request->input('status_id');
        $chamados->save();

        return redirect()->back()->with('status', 'Chamado editado com sucesso');
    }

    //Configuração das categorias
    public function categoria(){
        $data = [];

        $categorias = chamados_categorias::all();

        return view('config.chamados.categoria.config_categoria', ['categorias' => $categorias]);
    }
    public function categoria_criar(Request $request){

        $cat = new chamados_categorias;
        $cat->categoria = $request->input('categoria');
        $cat->bg_color = $request->input('bg_color');
        $cat->save();

        return redirect()->back()->with('status', 'Categoria criada com sucesso');
    }
    public function categoria_editar(Request $request, $id){
        
        $cat = chamados_categorias::find($id);
        $cat->categoria = $request->input('categoria');
        $cat->bg_color = $request->input('bg_color');
        $cat->save();

        return redirect()->back()->with('status', 'Categoria editada com sucesso');

    }
    public function categoria_exc($id){
        $cat = chamados_categorias::find($id);
        $cat->delete();

        return redirect()->back()->with('status', 'Categoria deletada com sucesso');
    }
    //Termino das configurações de categoria

    //Configuração de status
    public function status(){

        $status = chamados_status::all();
        return view('config.chamados.status.config_status', [ 'status' => $status]);
    }
    public function status_criar(Request $request){

        $st = new chamados_status;
        $st->status = $request->input('status');
        $st->bg_color = $request->input('bg_color');
        $st->save();  

        return redirect()->back()->with('status','Status criado');

    }
    public function status_editar(Request $request, $id){

        $st = chamados_status::find($id);
        $st->status = $request->input('status');
        $st->bg_color = $request->input('bg_color');
        $st->save();

        return redirect()->back()->with('status','Status editado');
    }
    public function download(Request $request, $anexo){

        $path = public_path().'/assets/anexo/'.$anexo;

        $headers = array(
            'content-type' => 'application/xlsx',
            'content-type' => 'application/jpg'
        );
        return Response::download($path, $anexo, $headers);
    }
}
