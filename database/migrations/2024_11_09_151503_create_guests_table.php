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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('group_name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->enum('rsvp', ['pending', 'attending', 'not-attending'])->default('pending');
            $table->string('dietary');
            $table->integer('table_number');
            $table->boolean('invite_sent')->default(false);
            $table->integer('plus_allowed');
            $table->string('plus_name');
            $table->enum('gift_status', ['pending', 'yes', 'no']);
            $table->text('notes');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
