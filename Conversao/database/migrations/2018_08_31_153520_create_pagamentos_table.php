<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->smallInteger('parcelas');
            $table->dateTime('horario_transacao');
            $table->unsignedInteger('status_fk');
            $table->foreign('status_fk')->references('id')->on('status');
            $table->string('id_transacao');
            $table->float('lucro_liquido');
            $table->string('forma');
            $table->unsignedInteger('meio_fk');
            $table->foreign('meio_fk')->references('id')->on('meios');
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
      Schema::table('pagamentos', function(Blueprint $table){
        $table->dropForeign('pagamentos_pedido_id_foreign');
        $table->dropForeign('pagamentos_status_fk_foreign');
        $table->dropForeign('pagamentos_meio_fk_foreign');
        $table->dropIfExists('pagamentos');
      });
      Schema::enableForeignKeyConstraints();
    }
}
