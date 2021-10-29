<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('folio_id');
            $table->text('comentario');
            $table->timestamps();


            $table->foreign('usuario_id')->references('id')
                                       ->on('users')
                                       ->onDelete('cascade')
                                       ->onUpdate('cascade');
            $table->foreign('folio_id')->references('id')
                                       ->on('folios')
                                       ->onDelete('cascade')
                                       ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
