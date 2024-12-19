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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mother_id')->nullable()->constrained('persons', 'id')->nullOnDelete();
            $table->foreignId('father_id')->nullable()->constrained('persons', 'id')->nullOnDelete();

            $table->string('lastname')->comment("Фамилия");
            $table->string('name')->comment("Имя");
            $table->string('middlename')->comment("Отчество")->nullable();
            $table->date('birthdate')->comment('День рождения')->nullable();
            $table->string('gender')->nullable();

            $table->timestamps();
            $table->softDeletes();


        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
