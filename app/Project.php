<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  // Defining the one-to-one or many-to-one relationship
  public function category() {
    return $this->belongsTo('App\Category');
  }
}
