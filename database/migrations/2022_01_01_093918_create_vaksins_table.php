<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaksinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('jenis_vaksin_1');
            $table->date('tgl_vaksin_1');
            $table->string('kota_vaksin_1');
            $table->string('img_bukti_1');
            $table->string('jenis_vaksin_2');
            $table->date('tgl_vaksin_2');
            $table->string('kota_vaksin_2');
            $table->string('img_bukti_2');
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaksins');
    }
}
