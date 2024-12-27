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
        Schema::create('vendor_models', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('vendor_id')->nullable();
            $table->foreignId('vendor_id')->nullable()->constrained()->nullOnDelete();

            $table->string('name');
            $table->boolean('end_of_life')->default(false)->comment('Снята с производства');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_models');
    }
};
