<?php

namespace lucaLabs;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name', 'surname', 'birthday'];

  public function subjects()
  {
    return $this->hasMany('lucaLabs\Subject');
  }
}
