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
        if (!Schema::hasTable('transactions')){
            Schema::create('transactions', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->string('tipo');
                $table->decimal('valor', 10, 2);
                $table->unsignedBigInteger('category_id');
                $table->timestamps();
            
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
            
                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('restrict'); 
        });
    }
    }      
};
