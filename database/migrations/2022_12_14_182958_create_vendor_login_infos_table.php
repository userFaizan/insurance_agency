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
        Schema::create('vendor_login_infos', function (Blueprint $table) {
            $table->id();
            $table->string('webiste')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('pin')->nullable();
            $table->text('note')->nullable();
            $table->foreignId('vendor_id')->constrained('vendors');
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
        Schema::dropIfExists('vendor_login_infos');
    }
};
