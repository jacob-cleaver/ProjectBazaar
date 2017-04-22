<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use Session;

class CourseController extends Controller
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
        // Display a view of all the courses and a form to create a new course
        $courses = Course::all();
        return view('courses.index')->withCourses($courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save a new course and then redirect back to index
        $this->validate($request, array(
          'name' => 'required|max:255|unique:courses,name'
        ));

        $course = new Course;
        $course->name = $request->name;
        $course->save();

        Session::flash('success', 'New Course has been created');

        return redirect()->route('courses.index');
    }

    public function delete($id) {
      $course = Course::find($id);
      return view('courses.delete')->withCourse($course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course = Course::find($id);
      $course->delete();

      Session::flash('success', 'The Course Was Successfully Deleted!');
      return redirect()->route('courses.index');
    }
}
