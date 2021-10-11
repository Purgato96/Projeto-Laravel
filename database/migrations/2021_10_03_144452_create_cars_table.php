<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('vehicle_name')->nullable();
            $table->string('link')->nullable();
            $table->date('year')->nullable();
            $table->string('fuel')->nullable();
            $table->string('doors')->nullable();
            $table->string('mileage')->nullable();
            $table->string('exchange')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cars');
    }
}
