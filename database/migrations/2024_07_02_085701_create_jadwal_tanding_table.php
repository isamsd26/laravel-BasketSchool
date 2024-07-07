<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_tanding', function (Blueprint $table) {
            $table->id();
            $table->string('hari_tanding');
            $table->date('tanggal_tanding');
            $table->string('nama_kompetensi');
            $table->string('logo_tim_a');
            $table->string('logo_tim_b');
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
        Schema::dropIfExists('jadwal_tanding');
    }
}
