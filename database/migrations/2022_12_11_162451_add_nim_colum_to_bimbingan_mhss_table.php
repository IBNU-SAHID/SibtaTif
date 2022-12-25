<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bimbingan_mhss', function (Blueprint $table) {
            //
            $table
                ->string('nim', 11)
                ->nullable()
                ->after('id');
            $table
                ->foreign('nim')
                ->references('nim')
                ->on('mahasiswas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bimbingan_mhss', function (Blueprint $table) {
            //
            $table->dropForeign(['nim']);
            $table->dropColumn('nim');
        });
    }
};
