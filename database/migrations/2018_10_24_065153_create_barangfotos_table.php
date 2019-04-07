<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangfotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangfotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->UnsignedInteger('barang_id');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
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
        Schema::dropIfExists('barangfotos');
    }
}
