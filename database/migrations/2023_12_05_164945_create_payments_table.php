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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->string('trxref')->unique();
            $table->string('status')->default('pending');
            $table->decimal('amount',8,2);
            $table->string('gateway_message');
            $table->string('type')->default('http');
            $table->string('event_type')->nullable();
            $table->string('channel')->nullable();
            $table->boolean('paid')->default(0);
            $table->json('payload');
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
