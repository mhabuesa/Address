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
            $table->string('title');
            $table->string('price');
            $table->string('status');
            $table->string('type');
            $table->string('place');
            $table->string('partner');
            $table->string('location');
            $table->integer('size');
            $table->string('floor');
            $table->string('room');
            $table->string('bedroom');
            $table->string('a_bath');
            $table->string('c_bath');
            $table->string('balconie');
            $table->string('garage');
            $table->date('date');
            $table->string('dining')->nullable();
            $table->string('living')->nullable();
            $table->string('air')->nullable();
            $table->string('emergency')->nullable();
            $table->string('parking')->nullable();
            $table->string('cable')->nullable();
            $table->string('fire')->nullable();
            $table->string('tiled')->nullable();
            $table->string('electric')->nullable();
            $table->string('lift')->nullable();
            $table->longText('desp');
            $table->string('preview');
            $table->string('plan');
            $table->string('video');
            $table->integer('on_off')->default(0);
            $table->integer('position')->default(0);
            $table->integer('property_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
