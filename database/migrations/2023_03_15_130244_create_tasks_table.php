<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->enum('status', ['start', 'progress' . 'test', 'fixed', 'finish']);
            $table->date('start_date');
            $table->time('time_limit');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Category::class, 'category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
