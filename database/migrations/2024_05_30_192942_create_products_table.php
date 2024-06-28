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
            $table->string('store')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('product_name');
            $table->string('slug');
            $table->string('sku')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->enum('unit',['kg','pc',])->default('kg');
            $table->enum('selling_type',['transactional','solution',])->default('transactional');
            $table->string('barcode_symbology')->nullable();
            $table->string('item_code')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('tax_type')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('discountvalue')->nullable();
            $table->string('quantityalert')->nullable();
            $table->string('image')->nullable();
            $table->string('vendor')->nullable();
            $table->string('manufactureddate')->nullable();
            $table->string('expiryon')->nullable();
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
//$table->enum('status',['active','inactive',])->default('active');
