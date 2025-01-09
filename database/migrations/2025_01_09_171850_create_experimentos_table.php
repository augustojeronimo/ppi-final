<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experimentos', function (Blueprint $table) {
            $table->id();
            $table->string("nome") ->unique();
            $table->string("descricao");
            $table->date("data")->nullable();
        });

        Schema::create('experimento_equipamento', function (Blueprint $table) {
            $table->unsignedBigInteger("experimento_id");
            $table->unsignedBigInteger("equipamento_id");

            $table->foreign("experimento_id")->references("id")->on("experimentos");
            $table->foreign("equipamento_id")->references("id")->on("equipamentos");

            $table->primary(["experimento_id", "equipamento_id"]);
        });

        Schema::create('experimento_material', function (Blueprint $table) {
            $table->unsignedBigInteger("experimento_id");
            $table->unsignedBigInteger("material_id");

            $table->foreign("experimento_id")->references("id")->on("experimentos");
            $table->foreign("material_id")->references("id")->on("materiais");

            $table->primary(["experimento_id", "material_id"]);
        });

        Schema::create('experimento_reagente', function (Blueprint $table) {
            $table->unsignedBigInteger("experimento_id");
            $table->unsignedBigInteger("reagente_id");

            $table->foreign("experimento_id")->references("id")->on("experimentos");
            $table->foreign("reagente_id")->references("id")->on("reagentes");

            $table->primary(["experimento_id", "reagente_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experimento_equipamento');
        Schema::dropIfExists('experimento_material');
        Schema::dropIfExists('experimento_reagente');
        Schema::dropIfExists('experimentos');
    }
}
