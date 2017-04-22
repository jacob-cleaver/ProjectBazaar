<?php

namespace App\Http\Controllers;

use App\Project;

class PagesController extends Controller {

  public function getHome() {
    return view('pages.home');
  }

  public function getProjectIdeas() {
    $projects = Project::orderBy('created_at', 'desc')->paginate(5);
    return view('pages.projectIdeas')->withProjects($projects);
  }

  public function getAbout() {
    return view('pages.about');
  }

  public function getContact() {
    return view('pages.contact');
  }

  public function getLearnMore() {
    return view('pages.learnmore');
  }

  public function getExamplar() {
    return view('pages.examplar');
  }

  public function getSettings() {
    return view('pages.settings');
  }

}
