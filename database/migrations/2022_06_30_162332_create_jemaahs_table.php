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
        Schema::create('jemaahs', function (Blueprint $table) {
            $table->id();
            $table->string('karkun_name');
            $table->foreignId('halqah_id');
            $table->string('karkun_id');
            $table->string('karkun_notes');
            $table->string('bj_no');
            $table->string('bj_jenis');
            $table->string('bj_route');
            $table->date('bj_dateout'); 
            $table->date('bj_datereport'); 
            $table->date('bj_datedismiss'); 
            $table->text('bj_notes')->nullable();            
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
        Schema::dropIfExists('jemaahs');
    }
};
