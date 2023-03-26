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
        Schema::create('attributables', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->boolean('active')->default(1);
            $table->foreignUuid('attribute_option_id');
            $table->uuidMorphs('attributable');
            $table->integer('order')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->unique(['attribute_option_id', 'attributable_type', 'attributable_id'], 'attributable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributables');
    }
};
