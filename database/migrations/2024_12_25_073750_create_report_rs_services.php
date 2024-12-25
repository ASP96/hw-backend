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
        // Ответственный за сетевой узел
        Schema::create('report_rs_services_person', function (Blueprint $table) {
            $table->id();
            
            $table->string('lastname')->comment("Фамилия");
            $table->string('name')->comment("Имя");
            $table->string('middlename')->comment("Отчество")->nullable();

            $table->string('phone')->comment("Контактный телефон");

            $table->timestamps();
            $table->softDeletes();

        });

        // сетевой узел
        Schema::create('report_rs_services_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->constrained(
                'report_rs_services_person',
                'id'
            )->cascadeOnDelete();

            $table->string('name');
            $table->string('type')->comment('Тип узла')->nullable();
            $table->string('location')->comment('Расположение')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });

        // открытые порты и программы на этих портах на узле
        Schema::create('report_rs_services_ports', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('item_id')
            ->constrained('report_rs_services_items', 'id')->cascadeOnDelete();

            $table->string('name');
            $table->string('port');
            $table->string('programm');
            $table->string('version');

            $table->timestamps();
            $table->softDeletes();
        });

        // сетевые реквизиты узла
        Schema::create('report_rs_services_networks', function(Blueprint $table) {
            $table->id();

            $table->foreignId('item_id')->constrained(
                'report_rs_services_items',
                'id'
            )->cascadeOnDelete();

            $table->string('type')->nullable()->comment('Тип сетевого узла');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('report_rs_services_ip_addresses', function(Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->constrained(
                'report_rs_services_networks',
                'id'
            )
            ->onDelete('cascade');

            $table->string('value');
            $table->string('type')->nullable();
            $table->timestamps();
        });
        

        Schema::create('report_rs_services_operation_systems', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_rs_services');
        Schema::dropIfExists('report_rs_ip_addreses');
        Schema::dropIfExists('report_rs_operation_systems');
    }
};
