<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 20);
            $table->string('noisbn', 10);
            $table->string('penulis', 20);
            $table->string('penerbit', 20);
            $table->date('tahun');
            $table->string('stok', 20);
            $table->string('harga_pokok', 20);
            $table->string('harga_jual', 20);
            $table->string('ppn', 20);
            $table->string('diskon', 20);
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
        Schema::dropIfExists('buku');
    }
}
