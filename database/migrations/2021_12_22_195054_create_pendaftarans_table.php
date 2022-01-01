<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lowongan_id');
            $table->foreignId('user_id');
            $table->integer('no_tes')->unique();
            $table->foreignId('profil_id');
            $table->string('ukuran_baju');
            $table->string('ukuran_celana');
            $table->string('ukuran_sepatu');
            $table->string('jenis_vaksin_1');
            $table->date('tgl_vaksin_1');
            $table->string('kota_vaksin_1');
            $table->string('img_bukti_1');
            $table->string('jenis_vaksin_2');
            $table->date('tgl_vaksin_2');
            $table->string('kota_vaksin_2');
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
        Schema::dropIfExists('pendaftarans');
    }
}
