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
        Schema::create('karkuns', function (Blueprint $table) {
            $table->id();
            $table->string('kkname');
            $table->string('kkid')->unique();           
            $table->string('kkphone');           
            $table->string('kkemail')->unique();           
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
        Schema::dropIfExists('karkuns');
    }
};
