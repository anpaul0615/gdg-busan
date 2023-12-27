<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Persons', function (Blueprint $table) {

            // sqlite 에서는 not null 이 default
            // 만약 컬럼이 nullable 일경우, default-value 를 지정해줘야한다
            $table->string('name')->default('Guest');
            $table->integer('age')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Personss', function (Blueprint $table) {
            //
        });
    }
}
