<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Input;
use URL;

class CommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment([
            'content'   => Input::get('content'),
            'userId'    => Auth::user()->id,
            'courseId'  => Input::get('courseId')

        ]);
        $comment->save();
        return redirect(URL::previous());
    }

    /**
     * returns comments with course id
     *
     * @param $courseId
     * @return mixed
     */
    public function showCoursesComments($courseId) {
        //TODO not working at the moment
        return $comments = Comment::where('courseId', $courseId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TODO
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
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        //if($comment->userId == Auth::user()->id) {
            $comment->delete();
        //}
        return redirect(URL::previous());
    }
}
