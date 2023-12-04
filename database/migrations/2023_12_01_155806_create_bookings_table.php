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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('ref')->unique();
            $table->date('date');
            $table->unsignedBigInteger('time_id');
            $table->string('name');
            $table->string('phone');
            $table->text('message')->nullable();
            $table->unique(['date','time_id'],'unique_booking');
            $table->foreign('time_id')->references('id')->on('times');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};