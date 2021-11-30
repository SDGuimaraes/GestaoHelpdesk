<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InicioConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicioconfigs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('bgcor1');
            $table->string('bgcor2')->nullable();
            $table->string('txcor');
            $table->string('c1titulo')->nullable();
            $table->string('c2titulo')->nullable();
            $table->string('c3titulo')->nullable();
            $table->string('c4titulo')->nullable();
            $table->string('c1subtitulo')->nullable();
            $table->string('c2subtitulo')->nullable();
            $table->string('c3subtitulo')->nullable();
            $table->string('c4subtitulo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inicioconfigs');
    }
}
