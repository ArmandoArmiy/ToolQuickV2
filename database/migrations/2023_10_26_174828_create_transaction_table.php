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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->date('TransactionDate');
            $table->unsignedBigInteger('Partner_id');
            $table->foreign('Partner_id')->references('id')->on('partners');
            $table->decimal('TotalAmount', 10, 2);
            $table->enum('TransactionType', ['Venta', 'Compra']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
