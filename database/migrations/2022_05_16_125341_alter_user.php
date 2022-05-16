<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_status' ,function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
        });

        schema::create('cliente_setores', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
        });
        Schema::table('clientes',function(Blueprint $table){
            $table->unsignedBigInteger('setores_id');
            $table->foreign('setores_id')->references('id')->on('cliente_setores');
        });
        Schema::table('chamados', function (Blueprint $table){
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamados', function (Blueprint $table){
            $table->dropForeign('chamados_user_id_foreign');
            $table->dropColumn('user_id');
        });
        
        Schema::table('clientes', function (Blueprint $table){
            $table->dropForeign('clientes_setores_id_foreign');
            $table->dropColumn('setores_id');
        });
        Schema::dropIfExists('cliente_setores');
        Schema::dropIfExists('user_status');
    }
}
