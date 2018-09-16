<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->date('data_nascimento');
            $table->bigInteger('telefone');
            $table->bigInteger('celular')->unique();
            $table->string('email')->unique();
            // $table->string('email_recuperacao')->nullable();
            $table->string('senha');
            $table->string('genero');
            $table->bigInteger('cpf')->unique();
            $table->string('endereco');
            $table->mediumInteger('numero');
            $table->mediumInteger('complemento')->nullable();
            $table->string('bairro');
            $table->mediumInteger('CEP');
            $table->unsignedInteger('cidades_fk');
            $table->foreign('cidades_fk')->references("id")->on('cidades');
            $table->unsignedInteger('ufs_fk');
            $table->foreign('ufs_fk')->references("id")->on('ufs');
            // $table->unsignedInteger('favoritos_fk')->nullable();
            // $table->foreign('favoritos_fk')->references("id")->on('favoritos');
            // $table->unsignedInteger('pedidos_fk')->nullable();
            // $table->foreign('pedidos_fk')->references("id")->on('pedidos');

            $table->rememberToken();
            $table->timestamps();
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
        Schema::table('users', function(Blueprint $table){
          $table->dropForeign('users_cidades_fk_foreign');
          $table->dropForeign('users_ufs_fk_foreign');
          // $table->dropForeign('users_favoritos_fk_foreign');
          // $table->dropForeign('users_pedidos_fk_foreign');
          $table->dropIfExists('users');
        });
        Schema::enableForeignKeyConstraints();
    }
}
