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
        Schema::create('partners', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('PartnerName');
            $table->string('Address')->nullable();
            $table->string('PhoneNumber');
            $table->string('Email')->unique();
            $table->enum('PartnerType', ['Cliente', 'Proveedor']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
