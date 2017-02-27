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
        $this->validate($request, array(
          'name'    => 'required|max:255',
          'email'   => 'required|email|max:255',
          'comment' => 'required|min:5|max:2000'
        ));

        $project = Project::find($project_id);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->project()->associate($project);

        $comment->save();

        Session::flash('success', 'Comment was added');

        return redirect()->route('projects.idea', [$project->slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
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

        Session::flash('success', 'Comment Updated!');

        return redirect()->route('projects.show', $comment->project->id);
    }

    public function delete($id) {
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
