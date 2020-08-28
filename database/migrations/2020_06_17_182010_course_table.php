<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('course', function(Blueprint $table){
        $table -> increments('id');
        $table-> string('name');
        $table-> string('description');
        $table-> string('fee');
        $table-> string('enroll');
        $table-> string('classes');
        $table-> string('links');
        $table-> string('image');

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
