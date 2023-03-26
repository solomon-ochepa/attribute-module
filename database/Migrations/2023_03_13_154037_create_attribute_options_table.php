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
        Schema::create('attribute_options', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('active')->default(1);
            $table->foreignUuid('attribute_id');
            $table->string('value')->nullable();
            $table->string('code')->nullable();
            $table->string('data_type')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->unique(['attribute_id', 'value'], 'attribute_option');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_options');
    }
};
