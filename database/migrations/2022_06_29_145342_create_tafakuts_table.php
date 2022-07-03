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
        Schema::create('tafakuts', function (Blueprint $table) {
            $table->id();
            $table->string('karkun_name');
            $table->foreignId('mohallah_id');
            $table->foreignId('karkun_id');
            // $table->string('karkun_id');
            $table->string('karkun_phone')->nullable();
            $table->string('bt_address')->nullable(); 
            $table->string('bt_duration');
            $table->date('bt_checkin');
            $table->boolean('bt_leaves');
            $table->string('bt_expenses');
            $table->string('bt_experiences')->nullable();   // 1T, 4B, 40H, 3H
            $table->string('bt_lastyear')->nullable();
            $table->string('bt_lastyroute')->nullable();
            $table->string('bt_last2year')->nullable();
            $table->string('bt_last2yroute')->nullable();
            $table->boolean('bt_amm_fh');
            $table->boolean('bt_amm_2j');
            $table->boolean('bt_amm_tm');
            $table->boolean('bt_amm_g1');
            $table->boolean('bt_amm_g2');
            $table->boolean('bt_amm_3h');
            $table->string('bt_job');       // Pension, Enterprener, Public, Private, Student
            $table->string('bt_pasport')->nullable(); 
            $table->string('bt_marital');   // Married, Single, Widower
            $table->string('bt_language')->nullable(); 
            $table->string('bt_mexp')->nullable();      // 2B, 40H, 10/15H, 3H, LN, IPB
            $table->date('bt_mexp_date')->nullable(); 
            $table->string('bt_mexp_route')->nullable(); 
            $table->string('bt_mexp_relation')->nullable(); 
            $table->string('bt_mexp_notes')->nullable(); 
            $table->string('bt_appr1_name')->nullable(); 
            $table->date('bt_appr1_date')->nullable(); 
            $table->string('bt_appr1_rem')->nullable(); 
            $table->string('bt_appr2_name')->nullable(); 
            $table->date('bt_appr2_date')->nullable(); 
            $table->string('bt_appr2_rem')->nullable(); 
            $table->text('bt_notes')->nullable();             
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
        Schema::dropIfExists('tafakuts');
    }
};
