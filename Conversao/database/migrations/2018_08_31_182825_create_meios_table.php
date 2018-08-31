<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->float('taxa_transacao');
            $table->smallInteger('taxa_parcela');
            $table->smallInteger('taxa_outras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('meios');

        Schema::enableForeignKeyConstraints();

    }
}
