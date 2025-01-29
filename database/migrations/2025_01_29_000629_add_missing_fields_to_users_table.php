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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'nome_completo')) {
                $table->string('nome_completo')->after('id');
            }
            if (!Schema::hasColumn('users', 'data_cadastro')) {
                $table->timestamp('data_cadastro')->nullable()->after('senha');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nome_completo', 'data_cadastro']);
        });
    }
};
