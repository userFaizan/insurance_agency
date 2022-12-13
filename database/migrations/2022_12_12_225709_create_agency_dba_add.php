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
        Schema::create('agency_dba_add', function (Blueprint $table) {
            $table->id();
            $table->json('dba')->nullable();
            $table->string('dba_name')->nullable();
            $table->json('doi_registered')->nullable();
            $table->date('exp_date')->nullable();
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
        Schema::dropIfExists('agency_dba_add');
    }
};
