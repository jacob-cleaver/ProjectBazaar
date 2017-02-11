<?php

namespace App\Http\Controllers;

use App\Project;

class PagesController extends Controller {

  public function getHome() {
    return view('pages.home');
  }

  public function getProjectIdeas() {
    $projects = Project::orderBy('created_at', 'desc')->paginate(10);
    return view('pages.projectIdeas')->withProjects($projects);
  }

  public function getAbout() {
    return view('pages.about');
  }

}
