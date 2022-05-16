<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return
    redirect()->route("principal");
});
Route::get('/login',[Logincontroller::class, 'login'])->name('login');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('principal');
    //Chamados
    Route::get('/chamados',[ChamadoController::class, 'index'])->name('chamado');
    Route::post('/chamados',[ChamadoController::class, 'chamado_criar'])->name('criar_chamado');
    Route::put('/chamados/{id}/editar',[ChamadoController::class, 'chamado_editar'])->name('editar_chamado');
    Route::post('/chamados/{id}/excluir',[ChamadoController::class, 'chamado_excluir'])->name('excluir_chamado');
    Route::get('/download/{anexo}',[ChamadoController::class, 'download']);

    Route::get('/email', [EmailController::class, 'index'])->name('email');
    
    //configuração chamados categoria
    Route::get('/chamados/configuracao/categoria',[ChamadoController::class, 'categoria'])->name('config_categoria');
    Route::post('/chamados/configuracao/categoriasave',[ChamadoController::class, 'categoria_criar'])->name('config_cat_save');
    Route::put('/chamados/configuracao/{id}/categoriaeditar',[ChamadoController::class, 'categoria_editar'])->name('config_cat_editar');
    Route::get('/chamados/configuração/{id}/categoriaexcluir',[ChamadoController::class, 'categoria_exc'])->name('config_cat_excluir');
    //configuração chamados status
    Route::get('/chamados/configuracao/status',[ChamadoController::class, 'status'])->name('config_status');
    Route::post('/chamados/configuracao/statuscriar',[ChamadoController::class, 'status_criar'])->name('config_st_criar');
    Route::put('/chamados/configuracao/{id}/statuseditar',[ChamadoController::class, 'status_editar'])->name('config_st_editar');
    //configuração home 
    Route::get('/config/home',[AdminController::class, 'configInicial'])->name('config.home');
    Route::put('/config/{id}/home',[AdminController::class, 'configInicialSalvar'])->name('config.home.salvar');
    //configuração Usuarios
    Route::get('/perfil',function () {
        return 'perfil';
    });
});




