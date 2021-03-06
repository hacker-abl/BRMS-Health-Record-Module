<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCariReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cari_report', function (Blueprint $table) {
          $table->increments('id');
            $table->integer('cari_id')->unsigned();
            $table->foreign('cari_id')
                    ->references('id')
                    ->on('persons')
                    ->onDelete('cascade');
            $table->integer('age');
            $table->longText('complaints');
            $table->longText('HO_advice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cari_report');
    }
}
