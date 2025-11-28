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
        Schema::create('colivings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('location');
            $table->string('area');
            $table->string('distance_info');
            $table->decimal('starting_price', 10, 0);
            $table->decimal('current_price', 10, 0);
            $table->string('price_period')->default('/ bulan');
            $table->boolean('has_discount')->default(false);
            $table->string('discount_type')->nullable();
            $table->integer('voucher_count')->default(0);
            $table->string('voucher_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colivings');
    }
};
