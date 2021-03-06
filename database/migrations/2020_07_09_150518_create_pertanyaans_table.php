<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('judul');
            $table->string('tag')->nullable();
            $table->longText('isi');
            $table->date('tanggal_dibuat')->nullable();
            $table->date('tanggal_diperbaharui')->nullable();
            $table->integer('votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaans');
    }
}
