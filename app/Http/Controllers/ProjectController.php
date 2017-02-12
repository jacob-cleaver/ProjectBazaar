<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Category;
use Session;

class ProjectController extends Controller
{

    public function __construct() {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create a variable and store all of the created projects from the database
        //Project::paginate(10) uses laravels pagination and the 10 sets 10 items to one page
        //orderBy('id', 'desc') is setting the projects to be shown in descending order (most recent first)
        $projects = Project::orderBy('id', 'desc')->paginate(10);

        // Return a view and pass in the above variable
        return view('projects.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
          $cats[$category->id] = $category->name;
        }
        return view('projects.create')->withCategories($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data to ensure there is no malicious data entered
        $this->validate($request, array(
          'title'       => 'required|max:100',
          'slug'        => 'required|alpha_dash|min:5|max:255|unique:projects,slug',
          'category_id' => 'required|integer',
          'description' => 'required'
        ));

        // store in the database
        $project = new Project;

        $project->title = $request->title;
        $project->slug = $request->slug;
        $project->category_id = $request->category_id;
        $project->description = $request->description;

        $project->save();

        Session::flash('success', 'Project successfully created!');

        //redirect to another page
        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $project = Project::find($id);
      return view('projects.show')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find project in the database and save as a variable
        $project = Project::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
          $cats[$category->id] = $category->name;
        }

        // Return the view and pass in the variable
        return view('projects.edit')->withProject($project)->withCategories($cats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        // The if statement is allowing for the unique validation to work when updating a project idea
        // This has been done by including the slug validation if it is a new project and not including for the update
        $project = Project::find($id);
        if ($request->input('slug') == $project->slug) {
          $this->validate($request, array(
            'title'       => 'required|max:100',
            'category_id' => 'required|integer',
            'description' => 'required'
          ));
        } else {
          $this->validate($request, array(
            'title'       => 'required|max:100',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:projects,slug',
            'category_id' => 'required|integer',
            'description' => 'required'
          ));
        }

        // Save the data to the database
        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->slug = $request->input('slug');
        $project->category_id = $request->input('category_id');
        $project->description = $request->input('description');

        $project->save();

        // Set flash message with success message
        Session::flash('success', 'The Project Was Successfully Saved');

        //Redirect with flash data to projects.show
        return redirect()->route('projects.show', $project->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        Session::flash('success', 'The Project Was Successfully Deleted!');
        return redirect()->route('projects.index');
    }
}
