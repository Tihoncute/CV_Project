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
        Schema::create('vieclam', function (Blueprint $table) {
            $table->id('MaVL');
            $table->bigInteger('MaCT')->unsigned();
            $table->string('Tieude');
            $table->integer('SoLuongTuyen');
            $table->string('Gioitinh');
            $table->string('Mota');
            $table->string('Yeucau');
            $table->string('Kinhnghiem');
            $table->string('Mucluong');
            $table->string('Nganhnghe');
            $table->string('Diachi');
            $table->date('Hannop');
            $table->timestamps();
            $table->foreign('MaCT')->references('MaCT')->on('nhatd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vieclam');
    }
};
