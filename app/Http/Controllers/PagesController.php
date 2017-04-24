<?php

namespace App\Http\Controllers;

use App\Project;

class PagesController extends Controller {

  /**
  *The functions below return the views of the specific pages
  *Using the routes the pages controller is linked up and the users are redirected
  *This controller handles the following pages:
  *home, ideas, about, contact, learnmore, examplar and settings
  *
  */

  public function getHome() {
    return view('pages.home');
  }

  public function getProjectIdeas() {
    //Using the variable projects display on project ideas view
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
