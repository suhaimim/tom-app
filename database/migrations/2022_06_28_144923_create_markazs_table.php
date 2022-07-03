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
        Schema::create('markazs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('zonal_id');
            $table->foreignId('teritory_id');
            $table->string('mname');
            $table->text('mnotes')->nullable();                
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
        Schema::dropIfExists('markazs');
    }
};
