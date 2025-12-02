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
        Schema::create('coliving_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coliving_id')->constrained()->onDelete('cascade');
            $table->string('room_type'); // private, shared, etc.
            $table->decimal('price_per_month', 10, 2);
            $table->integer('room_size')->nullable(); // in square meters
            $table->integer('capacity'); // number of people
            $table->integer('available_rooms');
            $table->json('amenities')->nullable(); // ["wifi", "ac", "laundry", etc.]
            $table->text('description')->nullable();
            $table->json('images')->nullable(); // array of image paths
            $table->boolean('is_available')->default(true);
            $table->timestamps();

            $table->index(['coliving_id', 'is_available']);
            $table->index('room_type');
            $table->index('price_per_month');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coliving_details');
    }
};
