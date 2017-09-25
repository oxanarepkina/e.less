<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fields', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('datatype_id')->unsigned();
        });

        Schema::table('form_fields', function($table) {
            $table->foreign('datatype_id')->references('id')->on('datatypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_fields');
    }
}
