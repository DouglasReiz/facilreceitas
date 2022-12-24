<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Recipes', function (Blueprint $table) {
            $table->string('preparation_second')->nullable()->after('preparation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Recipes', function (Blueprint $table) {
            $table->dropColumn(('preparation_second'));
        });
    }
};
