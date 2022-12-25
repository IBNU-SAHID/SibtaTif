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
        Schema::table('mahasiswas', function (Blueprint $table) {
            //

            $table
                ->unsignedBigInteger('info_ta_id')
                ->nullable()
                ->after('telepon');
            $table
                ->foreign('info_ta_id')
                ->references('id')
                ->on('info_tas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            //
            $table->dropForeign(['info_ta_id']);
            $table->dropColumn('info_ta_id');
        });
    }
};
