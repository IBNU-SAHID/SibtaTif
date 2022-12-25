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
        Schema::table('riwayat_bimbingans', function (Blueprint $table) {
            //
            $table
                ->string('pembimbing_id')
                ->nullable()
                ->after('nim');
            $table
                ->foreign('pembimbing_id')
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
        Schema::table('riwayat_bimbingans', function (Blueprint $table) {
            //
            $table->dropForeign(['pembimbing_id']);
            $table->dropColumn('pembimbing_id');
        });
    }
};
