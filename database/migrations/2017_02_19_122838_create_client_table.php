<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_information', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("advocate_id");
            $table->string("fullname");
            $table->string("gender");
            $table->string("email")->unique();
            $table->string('phone');
            $table->string('fax');
            $table->string('maidenname');
            $table->string('locbirth');
            $table->date("dob");
            $table->string("address0");
            $table->string("address1");
            $table->string("address2");
            $table->string("city");
            $table->string("country");
            $table->string("postcode");
            $table->string("clienttype");
            $table->string("clientlimit");
            $table->string("introducer");
            $table->string("introducer_def");
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
        //
    }
}
