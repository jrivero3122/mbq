<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreRateToRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->float('kitchen', 8, 2)->nullable()->after('exterior');
            $table->float('ceramic', 8, 2)->nullable()->after('kitchen');
            $table->float('porcelain', 8, 2)->nullable()->after('ceramic');
            $table->float('mosaic', 8, 2)->nullable()->after('porcelain');
            $table->float('glass', 8, 2)->nullable()->after('mosaic');
            $table->float('big_project', 8, 2)->nullable()->after('glass');
            $table->float('surface_condition', 8, 2)->nullable()->after('big_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->dropColumn('kitchen');
            $table->dropColumn('ceramic');
            $table->dropColumn('porcelain');
            $table->dropColumn('mosaic');
            $table->dropColumn('glass');
            $table->dropColumn('big_project');
            $table->dropColumn('surface_condition');
        });
    }
}
