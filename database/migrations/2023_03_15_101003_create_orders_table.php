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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customers_id');
            $table->foreignId('item_id');
            $table->text('description'); //description the customers
            $table->boolean('is_idea')->default(0);
            $table->double('primary_price');
            $table->double('final_price');
            $table->string('type');
            $table->string('scope');
            $table->text('colors');
            $table->text('fonts');
            $table->string('file');
            $table->date('time_limit', 'y-m-d');
            $table->enum('status', ['accept', 'pogress', 'rejected']);
            $table->text('notes'); /// notes the contect writer
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