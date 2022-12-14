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
        Schema::create('client_business_information', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('dba')->nullable();
            $table->string('classification')->nullable();
            $table->string('classification')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('industry_type')->nullable();
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
        Schema::dropIfExists('client_business_information');
    }
};
