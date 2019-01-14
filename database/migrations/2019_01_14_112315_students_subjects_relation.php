<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsSubjectsRelation extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('subjects', function(Blueprint $table)
    {
      $table->foreign('student_id')->references('id')->on('students');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('subjects', function(Blueprint $table)
    {
      $table->dropForeign('student_subjects_id_foreign');
    });
  }
}
