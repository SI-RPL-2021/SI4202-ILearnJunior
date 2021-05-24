<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->integer('kelas');
            $table->string('mapel');
            $table->integer('nilai');
            $table->text('keterangan');
            $table->string('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_nilai');
    }
}
