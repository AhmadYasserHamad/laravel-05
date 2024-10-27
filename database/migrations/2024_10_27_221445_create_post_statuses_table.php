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
        Schema::create('post_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->timestamp('created_at');
            // $table->timestamp('updated_at')->default('timestamp');
            // $table->timestamp('deleted_at')->default('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_statuses');
    }
};
