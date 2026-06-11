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
        Schema::create('grounds', function (Blueprint $table) {
            $table->id('ground_id');
            $table->unsignedBigInteger('ground_cityID')->nullable();
            $table->string('ground_name');
            $table->text('ground_description');
            $table->string('ground_address');
            $table->string('ground_image')->nullable();
            $table->boolean('ground_status')->default(1);
            $table->string('ground_perDayFee');
            $table->string('ground_perWeekFee');
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
        Schema::dropIfExists('grounds');
    }
};
