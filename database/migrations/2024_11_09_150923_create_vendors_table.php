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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('website');
            $table->text('service_provided');
            $table->integer('star')->nullable();
            $table->text('review');
            $table->decimal('estimated_cost', 10, 2);
            $table->boolean('contract_signed')->default(false);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
