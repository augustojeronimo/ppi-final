<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReagentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reagentes', function (Blueprint $table) {
            $table->id();
            $table->string("nome") ->unique();
            $table->date("validade");

            $table->unsignedBigInteger("movel_id");
            $table->foreign("movel_id")->references("id")->on("moveis");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reagentes');
    }
}
