<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Comment;
use Session;

class CommentsController extends Controller
{

  public function __construct() {
    $this->middleware('auth', ['except' => 'store']);
  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
        {
          /**
          *Validating name, email and comment from the user. If a requirement from the array is missing, validation will fail
          *Name of author is set to maximum os 255 characters, email is set to max 255 characters and comment is set to max 2000 characters.
          */
        $this->validate($request, array(
          'name'    => 'required|max:255',
          'email'   => 'required|email|max:255',
          'comment' => 'required|min:5|max:2000'
        ));

        $project = Project::find($project_id);

        //Find the project ID and add the variable of new comment passing in the variables stated above.

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->project()->associate($project);

        $comment->save();//Saving the comment

        Session::flash('success', 'Comment was added');//Fash message to display that the comment was successfully added

        return redirect()->route('projects.idea', [$project->slug]);//This will return the user to the route ideas with the comment added
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);//find the comment from the database and return user to the view comments edit
        return view('comments.edit')->withComment($comment);
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
        $comment = Comment::find($id);
        $this->validate($request, array('comment' => 'required'));

        $comment->comment = $request->comment;
        $comment->save();

        //Flash message to user to show success comment updated
        Session::flash('success', 'Comment Updated!');

        return redirect()->route('projects.show', $comment->project->id);
    }

    public function delete($id) {
      //Find associated comment and destory
      $comment = Comment::find($id);
      return view('comments.delete')->withComment($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        Session::flash('success', 'Comment Delete');
        return redirect()->route('projects.show', $comment->project->id);
    }
}
