<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksin_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->integer('pendaftaran_id');
            $table->string('jenis_vaksin_1');
            $table->string('kota_vaksin_1');
            $table->date('tgl_vaksin_1');
            $table->string('img_bukti_1');
            $table->string('jenis_vaksin_2');
            $table->string('kota_vaksin_2');
            $table->date('tgl_vaksin_2');
            $table->string('img_bukti_2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaksin_pendaftaran');
    }
}
