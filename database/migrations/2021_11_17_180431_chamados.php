<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chamados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token')->unique();
            $table->string('titulo');
            $table->string('nome');
            $table->string('email');
            $table->string('desc');
            $table->string('resp')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable()->defaultValue('1');
            $table->string('anexo')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('chamados_categorias');
            $table->foreign('status_id')->references('id')->on('chamados_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
