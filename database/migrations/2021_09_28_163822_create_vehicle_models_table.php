<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id('vehicle_model_id');
            $table->string('model_nm');
            $table->integer('vin_nbr');
            $table->string('driver_side');
            $table->integer('mileage_amt');
            $table->string('color_val');
            $table->string('year_val');
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types', 'vehicle_type_id');
            $table->foreignId('vehicle_brand_id')->constrained('vehicle_brands', 'vehicle_brand_id');
            $table->integer("cost_val");
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
        Schema::dropIfExists('vehicle_models');
    }
}
