<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrApplicationReportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_application_reports', function (Blueprint $table) {
            $table->foreign('tr_application_id',
                'fk_tr_application_reports_tr_applications1')->references('id')->on('tr_applications')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_application_reports', function (Blueprint $table) {
            $table->dropForeign('fk_tr_application_reports_tr_applications1');
        });
    }

}
