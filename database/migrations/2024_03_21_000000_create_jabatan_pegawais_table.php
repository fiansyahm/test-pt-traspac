<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateJabatanPegawaisTable extends Migration
{
    public function up()
    {
        Schema::create('jabatan_pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('unit_kerja_id');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatan_pegawais');
    }
}