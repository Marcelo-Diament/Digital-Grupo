<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('favoritos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id_fk');
            $table->foreign('user_id_fk')->references('id')->on('users');
            $table->unsignedInteger('produtos_fk');
            $table->foreign('produtos_fk')->references('id')->on('produtos');
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

        Schema::table('favoritos', function(Blueprint $table){
          $table->dropForeign('favoritos_user_id_fk_foreign');
          $table->dropForeign('favoritos_produtos_fk_foreign');
          $table->dropIfExists('favoritos');
        });

        Schema::enableForeignKeyConstraints();
    }
}
