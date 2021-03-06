<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianPenanamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_penanamen', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36);
            $table->foreignId('bahan_id')->onDelete('cascade');
            $table->foreignId('penanaman_id')->onDelete('cascade');
            $table->string('jumlah', 50);
            $table->date('tanggal');
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
        Schema::dropIfExists('rincian_penanamen');
    }
}
