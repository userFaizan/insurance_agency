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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('type_of_customer')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('salutation')->nullable();
            $table->string('email')->nullable();
            $table->string('email_type')->nullable();
            $table->string('phone')->nullable();
            $table->string('social_media')->nullable();
            $table->string('social_media_type')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('ss_no')->nullable();
            $table->string('id_no')->nullable();
            $table->string('id_type')->nullable();
            $table->string('medicare_no')->nullable();
            $table->date('part_a_start_date')->nullable();
            $table->date('part_a_start_date')->nullable();
            $table->date('part_b_start_date')->nullable();
            $table->date('medical_id')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('referral_source')->nullable();
            $table->string('image')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
