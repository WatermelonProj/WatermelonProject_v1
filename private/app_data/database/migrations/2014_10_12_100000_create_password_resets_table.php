<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resetarSenha', function (Blueprint $table) {
            $table->increments('idSolicitacao');
            $table->integer('idUsuario')->unsigned();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
            $table->foreign('idUsuario')->references("idUsuario")->on("usuario");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resetarSenha');
    }
}
