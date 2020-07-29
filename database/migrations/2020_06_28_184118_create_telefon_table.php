<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefon', function (Blueprint $table) {
            $table->Biginteger('idtelefon')->unsigned()->primary('idtelefon');
            $table->string('notelefon')->unique();
            $table->timestamps();

            $table->foreign('idtelefon')->references('id')->on('keluarga')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefon');
    }
}
