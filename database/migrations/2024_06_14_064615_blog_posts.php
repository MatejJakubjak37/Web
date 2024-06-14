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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('slug', 50)->unique();
            $table->string('short_description', 200);
            $table->string('image_src', 50);
            $table->text('content');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
        //
    }
};
