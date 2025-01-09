<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResiduosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residuos', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->unique();
            $table->date("descarte")->nullable();
        });

        Schema::create('residuo_experimento', function (Blueprint $table) {
            $table->unsignedBigInteger("residuo_id");
            $table->unsignedBigInteger("experimento_id");

            $table->foreign("residuo_id")->references("id")->on("residuos");
            $table->foreign("experimento_id")->references("id")->on("experimentos");

            $table->primary(["residuo_id", "experimento_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residuo_experimento');
        Schema::dropIfExists('residuos');
    }
}
