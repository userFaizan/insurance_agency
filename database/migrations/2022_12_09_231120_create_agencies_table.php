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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('name')->nullable();
            $table->string('principal_agent')->nullable();
            $table->json('address')->nullable();
            $table->json('phone')->nullable();
            $table->json('fax')->nullable();
            $table->json('email')->nullable();
            $table->json('webiste')->nullable();
            $table->string('notes')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('agencies');
    }
};
