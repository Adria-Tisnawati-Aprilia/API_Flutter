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
        Schema::create('booking', function (Blueprint $table) {
            $table->string('kode_booking')->primary();
            $table->date('tanggal_booking');
            $table->date('tanggal_main');
            $table->string('kode_arena');
            $table->string('kode_lapangan');
            $table->integer('id_users');
            $table->string('kode_jadwal');
            $table->double('dp_booking');
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
        Schema::dropIfExists('booking');
    }
};
