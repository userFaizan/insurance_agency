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
        Schema::create('client_physical_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('physical_city')->nullable();
            $table->string('physical_state')->nullable();
            $table->string('physical_zipcode')->nullable();
            $table->string('address_note')->nullable();
            $table->string('rent_or_own')->nullable();
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
        Schema::dropIfExists('client_physical_addresses');
    }
};
