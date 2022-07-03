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
        Schema::create('abadi_masjids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mohallah_id');
            $table->foreignId('amal_id');
            $table->foreignId('karkun_id');
            $table->text('notes')->nullable();              
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
        Schema::dropIfExists('abadi_masjids');
    }
};
