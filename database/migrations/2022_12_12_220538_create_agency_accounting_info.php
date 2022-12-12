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
        Schema::create('agency_accounting_info', function (Blueprint $table) {
            $table->id();
            $table->string('ein_letter')->nullable();
            $table->string('void_checks')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('business_type')->nullable();
            $table->string('fiscal_month_start')->nullable();
            $table->string('fiscal_month_end')->nullable();
            $table->date('income_tax')->nullable();
            $table->date('franchise_tax_due')->nullable();
            $table->date('sales_tax_due')->nullable();
            $table->string('routing_no')->nullable();
            $table->string('type_of_account')->nullable();
            $table->string('account_no')->nullable();
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
        Schema::dropIfExists('agency_accounting_info');
    }
};
