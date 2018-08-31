<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cor');
            $table->string('tamanho');
            $table->float('preco');
            $table->mediumInteger('estoque');
            $table->string('imgs');
            $table->string('titulo');
            $table->string('descricao');
            $table->unsignedInteger('categoria_fk');
            $table->foreign('categoria_fk')->references('id')->on('categorias');
            $table->unsignedInteger('subcategoria_fk');
            $table->foreign('subcategoria_fk')->references('id')->on('subcategorias');
            $table->unsignedInteger('marcas_fk');
            $table->foreign('marcas_fk')->references('id')->on('marcas');
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

        Schema::table('produtos', function(Blueprint $table){
          $table->dropForeign('produtos_categoria_fk_foreign');
          $table->dropForeign('produtos_subcategoria_fk_foreign');
          $table->dropForeign('produtos_marcas_fk_foreign');
          $table->dropIfExists('produtos');
        });
        Schema::enableForeignKeyConstraints();
    }
}
