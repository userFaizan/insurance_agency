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
        Schema::create('non_residential_states', function (Blueprint $table) {
            $table->id();
            $table->string('state')->nullable();
            $table->string('license_no')->nullable();
            $table->string('license_type')->nullable();
            $table->date('expiration_date')->nullable();
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
        Schema::dropIfExists('non_residential_states');
    }
};
