<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('NIP')->unique();
            $table->string('Nama');
            $table->string('Tempat_Lahir');
            $table->text('Alamat');
            $table->date('Tanggal_Lahir');
            $table->enum('Jenis_Kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('Agama');
            $table->string('No_HP');
            $table->string('NPWP')->nullable();
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}

