<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;

class ProjectIdeasController extends Controller
{
    public function getIdea($slug) {
      // Fetch from the database based on the slug
      // "->first" stops at the first one it gets it works the same as a get method
      $project = Project::where('slug', '=', $slug)->first();

      // Return the view and pass in the project objects
      return view('projects.idea')->withProject($project);
    }
}
