<?php

namespace lucaLabs;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function subjects()
  {
    return $this->hasMany('lucaLabs\Subject');
  }
}
