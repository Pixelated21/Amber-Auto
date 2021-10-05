<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoicesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices_details', function (Blueprint $table) {
            $table->id('sales_invoices_details_id');
            $table->foreignId('sales_invoice_id')->constrained('sales_invoices','sales_invoice_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vehicle_model_id')->constrained('vehicle_models','vehicle_model_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('quantity_amt');
            $table->integer('cost_val');
            $table->integer('discount_amt');
            $table->integer('sales_price');
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
        Schema::dropIfExists('sales_invoices_details');
    }
}
