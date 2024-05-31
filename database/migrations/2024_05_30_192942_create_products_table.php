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
            $table->string('store');
            $table->string('warehouse');
            $table->string('product_name');
            $table->string('slug');
            $table->string('suk');
            $table->string('category');
            $table->string('sub_category');
            $table->string('sub_sub_category');
            $table->string('brand');
            $table->string('unit');
            $table->string('selling_type');
            $table->string('barcode_symbology');
            $table->string('item_code');
            $table->string('description');
            $table->string('quantity');
            $table->string('price');
            $table->string('tax_type');
            $table->string('discount_type');
            $table->string('discountvalue');
            $table->string('quantityalert');
            $table->string('image');
            $table->string('vendor');
            $table->string('manufactureddate');
            $table->string('expiryon');
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
