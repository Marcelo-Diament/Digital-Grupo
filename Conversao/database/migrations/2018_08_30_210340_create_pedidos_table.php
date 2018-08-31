<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id_fk');
            $table->foreign('user_id_fk')->references('id')->on('users');
            $table->dateTime('horario_compra');
            $table->unsignedInteger('pagamento_fk');
            $table->foreign('pagamento_fk')->references('id')->on('pagamentos');
            $table->unsignedInteger('statusPagamento');
            $table->foreign('statusPagamento')->references('id')->on('status');
            $table->unsignedInteger('produtos_id');
            $table->foreign('produtos_id')->references('id')->on('produtos');
            $table->float('valor');
            $table->smallInteger('desconto');
            $table->string('cupom');
            $table->float('valor_final');
            $table->string('codigo_acompanhamento');
            $table->float('frete');
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
      Schema::table('pedidos', function(Blueprint $table){
        $table->dropForeign('pedidos_user_id_fk_foreign');
        $table->dropForeign('pedidos_pagamento_fk_foreign');
        $table->dropForeign('pedidos_statuspagamento_foreign');
        $table->dropForeign('pedidos_produtos_id_foreign');
        $table->dropIfExists('pedidos');
      });
      Schema::enableForeignKeyConstraints();    }
}
