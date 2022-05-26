<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("mobile");
            $table->string("address");
            $table->string("gender");
            $table->string("image");
            $table->tinyInteger('status');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("mobile");
            $table->dropColumn("address");
            $table->dropColumn("gender");
            $table->dropColumn("image");
            $table->dropColumn("status");
            });
    }
}
