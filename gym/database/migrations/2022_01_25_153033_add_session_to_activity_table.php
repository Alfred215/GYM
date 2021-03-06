<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSessionToActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sesions', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id')->default(1);
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sesions', function (Blueprint $table) {
            $table->dropForeign('session_activity_id_foreign');
            $table->dropColumn('activity_id');
        });
    }
}
