<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBansoskeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bansoskeluarga', function (Blueprint $table) {
            $table->bigInteger('idbansoskeluarga')->unsigned()->index();
            $table->bigInteger('idbansos')->unsigned()->index();
            $table->timestamps();

            $table->primary(['idbansoskeluarga', 'idbansos']);

            $table->foreign('idbansoskeluarga')->references('id')->on('keluarga')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('idbansos')->references('idbansos')->on('bansos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bansoskeluarga');
    }
}
