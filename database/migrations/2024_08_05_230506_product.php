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
            $table->string('name'); 
            $table->text('matricule'); 
            $table->decimal('price',10,3); 
            $table->text('description');
            $table->text('quantity'); 
            $table->text('availablecolor');
            $table->text('availablesize');
            $table->text('similarproducts');
            $table->enum('SKU', ['stock', 'vide','waitingfor']);
            $table->decimal('discount',10,3)->default(0.0);
            $table->unsignedBigInteger('category_id'); 
            $table->text('gender');
            $table->text('age');
            $table->text('image');
            $table->text('image_add1');
            $table->text('image_add2');
            $table->text('image_add3');
            $table->text('producttype');
            $table->timestamps();
            
            
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
         
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
