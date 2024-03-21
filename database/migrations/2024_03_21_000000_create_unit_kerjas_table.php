<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitKerjasTable extends Migration
{
    public function up()
    {
        Schema::create('unit_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('Unit_Kerja');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unit_kerjas');
    }
}
