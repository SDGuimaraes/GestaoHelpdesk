<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserDetalhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->string('sexo')->nullable();
            $table->string('cpf');
            $table->string('img')->nullable();
            $table->integer('ddd')->nullable();
            $table->integer('telefone')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('user_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('sexo');
            $table->dropColumn('cpf');
            $table->dropColumn('img');
            $table->dropColumn('dd');
            $table->dropColumn('telefone');
            $table->dropForeign('users_cliente_id_foreign');
            $table->dropColumn('cliente_id');
            $table->dropForeign('users_status_id_foreign');
            $table->dropColumn('status_id');
        });
    }
}
