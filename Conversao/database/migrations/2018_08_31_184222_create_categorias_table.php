<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('imgs');
            $table->string('descricao');
            $table->unsignedInteger('subcategoria_fk');
            $table->foreign('subcategoria_fk')->references('id')->on('subcategorias');
          });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();

      Schema::table('categorias', function(Blueprint $table){
        $table->dropForeign('categorias_subcategoria_fk_foreign');
        $table->dropIfExists('categorias');
      });
      Schema::enableForeignKeyConstraints();
    }
}
