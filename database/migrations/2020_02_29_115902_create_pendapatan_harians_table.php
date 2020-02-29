<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatanHariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan_harians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->date('tanggal');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('total');
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
        Schema::dropIfExists('pendapatan_harians');
    }
}
