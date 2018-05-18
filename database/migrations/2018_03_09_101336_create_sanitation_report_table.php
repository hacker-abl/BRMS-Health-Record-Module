<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanitationReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanitation_report', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sanitation_id')->unsigned();
            $table->foreign('sanitation_id')
                    ->references('id')
                    ->on('persons')
                    ->onDelete('cascade');
            $table->string('no_toilet',255);
            $table->string('not_proper',255);
            $table->string('poor',255);
            $table->string('without',255);
            $table->longText('remarks');
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
        Schema::dropIfExists('sanitation_report');
    }
}
