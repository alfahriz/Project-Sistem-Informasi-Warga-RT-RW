<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stating', function (Blueprint $table) {
            $table->BigIncrements('idstg');
            $table->string('statustinggal', 20);
            $table->timestamps();
        });

        Schema::table('keluarga', function (Blueprint $table) {
            $table->foreign('idstating')->references('idstg')->on('stating')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stating');
    }
}
