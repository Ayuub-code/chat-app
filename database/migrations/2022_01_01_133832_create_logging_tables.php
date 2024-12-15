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
        Schema::create('logging_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Sender_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('Receiver_id')->constrained('users')->cascadeOnDelete();
            $table->string('message');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logging_tables');
    }
};
