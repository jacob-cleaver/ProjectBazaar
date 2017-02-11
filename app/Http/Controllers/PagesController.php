<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getHome() {
    return view('pages.home');
  }

  public function getProjectIdeas() {
    $projects = Project::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.projectIdeas')->withProjects($projects);
  }

  public function getAbout() {
    return view('pages.about');
  }

}
