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
        Schema::table('site', function (Blueprint $table) {
           $table->string('domain')->nullable();
           $table->string('domain')->nullable();
           $table->integer('status')->default(0);
           $table->integer('siteType')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site', function (Blueprint $table) {
            //
        });
    }
};
