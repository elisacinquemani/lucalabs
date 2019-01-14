<?php

use Illuminate\Database\Seeder;
use lucaLabs\Student;
use lucaLabs\Subject;

class StudentTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $student = Student::create([
      'name' => 'Jimmy',
      'surname' => 'Anderson',
      'birthday' => date('Y/m/d')
    ]);

    echo $student;

    $subject = Subject::find(1);

    echo $subject;

    $student->subjects()->save($subject);
  }
}
