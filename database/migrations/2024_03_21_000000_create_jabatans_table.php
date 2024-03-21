<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatansTable extends Migration
{
    public function up()
    {
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->string('Golongan');
            $table->string('Eselon');
            $table->string('Jabatan');
            $table->string('Tempat_Tugas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
