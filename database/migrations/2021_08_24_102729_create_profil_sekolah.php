<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npsn');
            $table->string('status');
            $table->string('bentuk');
            $table->string('akreditasi');
            $table->string('kurikulum');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->text('visi');
            $table->text('misi');
            $table->string('gambar');
            $table->text('sejarah');
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
        //
    }
}
