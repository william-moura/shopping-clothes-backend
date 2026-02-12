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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->string('variation_name');
            $table->bigInteger('product_id')->unsigned();
            $table->float('price');
            $table->integer('quantity');
            $table->string('sku')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
