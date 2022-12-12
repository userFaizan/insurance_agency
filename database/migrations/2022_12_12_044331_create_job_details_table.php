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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->date('start_date')->nullable();
            $table->string('pay_type')->nullable();
            $table->string('pay_amount')->nullable();
            $table->string('pay_frequency')->nullable();
            $table->string('payment_method')->nullable();
            $table->date('payment_reminder')->nullable();
            $table->string('reporting_to')->nullable();
            $table->string('department')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
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
        Schema::dropIfExists('job_details');
    }
};
