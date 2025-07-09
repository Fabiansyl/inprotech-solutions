<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2); // Use decimal for money
            $table->integer('duration_days')->default(0); // e.g., how many days service takes
            // ←— New discount fields:
            $table->enum('discount_type', ['percentage', 'fixed'])
                  ->nullable()
                  ->after('duration_days');
            $table->decimal('discount_value', 12, 2)
                  ->nullable()
                  ->after('discount_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
