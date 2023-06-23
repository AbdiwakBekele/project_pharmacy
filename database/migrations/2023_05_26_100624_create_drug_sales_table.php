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
        Schema::create('drug_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drug_id');
            $table->integer('amount');
            $table->string('slug');
            $table->integer('price');
            $table->foreign('drug_id')->references('id')->on('drug_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drug_sales');
    }
};
