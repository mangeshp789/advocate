<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matters', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id");
            $table->integer("advocate_id");
            $table->string("matter_reference");
            $table->string('matter_type');
            $table->string('matter_def');
            $table->string('matter_stage');
            $table->date('matter_op_date');
            $table->date('matter_cl_date');
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
