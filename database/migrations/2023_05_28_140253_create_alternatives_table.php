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
        Schema::create('alternative', function (Blueprint $table) {
            $table->id();
            $table->Integer('nik');
            $table->String('nama');
            $table->String('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jk', ['laki-laki', 'perempuan'])->nullable();
            $table->String('agama');
            $table->float('tanggungan_anak');
            $table->float('penghasilan');
            $table->float('luas_bangunan');
            $table->float('kelistrikan');
            $table->float('kendaraan');
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
        Schema::dropIfExists('alternative');
    }
};
