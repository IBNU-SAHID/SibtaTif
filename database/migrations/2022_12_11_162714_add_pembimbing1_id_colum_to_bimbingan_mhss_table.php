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
                ->string('pembimbing1_id')
                ->nullable()
                ->after('nim');
            $table
                ->foreign('pembimbing1_id')
                ->references('nip')
                ->on('dosens')
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
            $table->dropForeign(['pembimbing1_id']);
            $table->dropColumn('pembimbing1_id');
        });
    }
};
