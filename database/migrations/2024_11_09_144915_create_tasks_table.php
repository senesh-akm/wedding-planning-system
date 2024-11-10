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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('assign_to');
            $table->date('due_date');
            $table->enum('priority', ['low', 'medium', 'high'])->default('low');
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->string('category');
            $table->decimal('budget', 10, 2);
            $table->decimal('actual_cost', 10, 2);
            $table->date('completion_date');
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
