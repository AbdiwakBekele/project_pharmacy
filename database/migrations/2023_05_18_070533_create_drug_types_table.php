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
        Schema::create('drug_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catagory_id');
            $table->unsignedBigInteger('unit_id');
            $table->string('brand_name');
            $table->string('slug');
            $table->string('generic_name');
            $table->integer('dosage');
            $table->integer ('price');
            
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');

            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_types');
    }
};
