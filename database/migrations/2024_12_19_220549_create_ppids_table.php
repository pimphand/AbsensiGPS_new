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
        Schema::create('ppids', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->index();
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->integer('total_view')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppids');
    }
};
