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
        Schema::disableForeignKeyConstraints();

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_url')->nullable();
            $table->string('image')->nullable();
            $table->string('img_alt_text')->nullable();
            $table->string('url')->nullable();
            $table->string('price')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->unsignedBigInteger('product_categorie_id')->nullable();
            $table->foreign('product_categorie_id')->references('id')->on('product_categories');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
