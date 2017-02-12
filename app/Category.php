<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Telling the model to use the Category table
    protected $table = 'categories';

    // Defining the one-to-many or many-to-many relationship
    public function projects() {
      return $this->hasMany('App\Project');
    }
}
