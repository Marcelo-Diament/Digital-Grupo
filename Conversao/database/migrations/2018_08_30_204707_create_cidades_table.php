<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('state_id');
            $table->foreign('state_id')->references('id')->on('ufs');
            $table->string('title');
            $table->bigInteger('iso');
            $table->smallInteger('iso_ddd');
            $table->smallInteger('status');
            $table->string('slug');
            $table->bigInteger('population');
            $table->float('lat');
            $table->float('long');
            $table->float('income_per_capita');
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
      Schema::table('cidades', function(Blueprint $table){
        $table->dropForeign('cidades_state_id_foreign');
        $table->dropIfExists('cidades');
      });
      Schema::enableForeignKeyConstraints();
    }
}
