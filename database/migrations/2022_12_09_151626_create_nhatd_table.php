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
        Schema::create('nhatd', function (Blueprint $table) {
            $table->id('MaCT');
            // $table->bigInteger('MaTK')->unsigned();
            $table->string('TenCT');
            $table->string('TenNLH');
            $table->string('email');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('logo');
            $table->timestamps();
            // $table->foreign('MaTK')->references("id")->on('users');
            $table->foreign('MaCT')->references("id")->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhatd');
    }
};
