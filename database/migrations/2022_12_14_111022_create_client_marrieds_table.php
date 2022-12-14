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
        Schema::create('client_marrieds', function (Blueprint $table) {
            $table->id();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('salutation')->nullable();
            $table->string('salutation')->nullable();
            $table->string('email')->nullable();
            $table->string('email_type')->nullable();
            $table->string('social_media')->nullable();
            $table->string('social_media_type')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->date('ss_no')->nullable();
            $table->string('id_no')->nullable();
            $table->string('id_type')->nullable();
            $table->string('medicare_no')->nullable();
            $table->date('part_a_start_date')->nullable();
            $table->date('part_a_start_date')->nullable();
            $table->date('part_b_start_date')->nullable();
            $table->date('medical_id')->nullable();
            $table->foreignId('client_id')->constrained('clients');
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
        Schema::dropIfExists('client_marrieds');
    }
};
