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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("restaurant_id")->nullable();
            $table->foreign("restaurant_id")->references("id")->on("restaurants")->nullOnDelete();
            $table->string("name");
            $table->string("image");
            $table->string("ingredients");
            $table->string("description");
            $table->string("price");
            $table->boolean("visibility");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
