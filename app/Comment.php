<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function project() {
      // Defining the one-to-many or many-to-many relationship
      return $this->belongsTo('App\Project');
    }
}
