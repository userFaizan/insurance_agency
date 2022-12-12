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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->date("dob")->nullable();
            $table->string("tax_id")->nullable();
            $table->string("dl_id")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->unique()->nullable();
            $table->string("address")->nullable();
            $table->string("file")->nullable();
            $table->text("notes")->nullable();
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
        Schema::dropIfExists('employees');
    }
};
