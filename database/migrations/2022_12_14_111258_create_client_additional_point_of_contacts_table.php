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
        Schema::create('client_additional_point_of_contacts', function (Blueprint $table) {
            $table->id();
            $table->sting('full_name')->nullable();
            $table->sting('email')->nullable();
            $table->sting('position')->nullable();
            $table->sting('phone')->nullable();
            $table->sting('tax')->nullable();
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
        Schema::dropIfExists('client_additional_point_of_contacts');
    }
};
