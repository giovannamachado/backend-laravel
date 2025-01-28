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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2)->nullable()->change();;
            $table->unsignedBigInteger('category_id'); 
            $table->timestamps();
        
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict'); 
        });
        
    }      
};
