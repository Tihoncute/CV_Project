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
        Schema::create('ungvien', function (Blueprint $table) {
            $table->id("MaUV");
            // $table->bigInteger('MaTK')->unsigned();
            $table->string('Hoten');
            $table->string('email');
            $table->string('SDT');
            $table->string('Gioitinh');
            $table->string('Ngaysinh');
            $table->string('Diachi');
            $table->string('file_cv');
            $table->timestamps();
            // $table->foreign('MaTK')->references("id")->on('users');
            $table->foreign('MaUV')->references("id")->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ungvien');
    }
};
