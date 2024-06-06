<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name');
            $table->longtext('description');
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->string('country');
            $table->decimal('price', 10, 2);
            $table->text('photo')->nullable();
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('car_park');
            $table->string('build_up_area');
            $table->string('furnishing');
            $table->boolean('occupancy')->default(0);
            $table->boolean('availability')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
        Schema::dropIfExists('states');
        Schema::dropIfExists('users');
    }
};
