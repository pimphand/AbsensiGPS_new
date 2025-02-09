<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apb_des', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tahun')->nullable();
            $table->string('pendapatan')->nullable();
            $table->string('belanja')->nullable();
            $table->string('pembiayaan')->nullable();
            $table->string('pengeluaran')->nullable();
            $table->string('penerimaan')->nullable();
            $table->string('surplus_defisit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apb_des');
    }
};
