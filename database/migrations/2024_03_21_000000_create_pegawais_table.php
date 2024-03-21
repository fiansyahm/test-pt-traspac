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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}

