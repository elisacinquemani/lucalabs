<?php

use Illuminate\Database\Seeder;
use lucaLabs\Subject;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Subject::create([
        'credits' => '3',
        'tot_hours' => '69'
      ]);
    }
}
