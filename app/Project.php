<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  // Defining the one-to-one or many-to-one relationship
  public function course() {
    return $this->belongsTo('App\Course');
  }

  public function comments() {
    return $this->hasMany('App\Comments');
  }
}
