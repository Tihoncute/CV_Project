<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyendung', function (Blueprint $table) {
            $table->bigInteger('MaUV')->unsigned();
            $table->bigInteger('MaVL')->unsigned();
            $table->timestamps();
            $table->primary(['MaUV','MaVL']);
            $table->foreign('MaUV')->references("MaUV")->on('ungvien');
            $table->foreign('MaVL')->references("MaVL")->on('vieclam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuyendung');
    }
};
