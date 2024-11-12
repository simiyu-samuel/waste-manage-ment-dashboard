<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste_collections', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->dateTime('collection_time');
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamps();
    
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste_collections');
    }
}
