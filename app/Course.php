<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Telling the model to use the Course table
    protected $table = 'courses';

    // Defining the one-to-many or many-to-many relationship
    public function projects() {
      return $this->hasMany('App\Project');
    }
}
