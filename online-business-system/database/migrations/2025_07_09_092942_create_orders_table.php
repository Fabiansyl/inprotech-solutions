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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->foreignId('package_id')->constrained('packages')->cascadeOnDelete();
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])
                  ->default('pending');
            $table->text('notes')->nullable();
            $table->decimal('total_price', 15, 2);
            // ←— New order-level discount column:
            $table->decimal('discount_applied', 12, 2)
                  ->nullable()
                  ->after('total_price');
            $table->timestamp('ordered_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
