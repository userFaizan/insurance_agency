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
        Schema::create('agency_license_info', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('resident_state')->nullable();
            $table->string('npn_no')->nullable();
            $table->string('license_no')->nullable();
            $table->string('license_type')->nullable();
            $table->date('expiration_date')->nullable();
            $table->date('upload_date')->nullable();
            $table->foreignId('agency_id')->constrained('agencies');
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
        Schema::dropIfExists('agency_license_info');
    }
};
