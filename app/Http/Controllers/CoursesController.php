<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Course;
use App\Data;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());

        $pathToCourse = storage_path() . '/courses/';
        echo $pathToCourse;

        if (!File::isDirectory($pathToCourse)) {
            File::makeDirectory($pathToCourse);
        }
        File::makeDirectory($pathToCourse . $course->slug);
        $course->path_to_material = $pathToCourse . $course->slug;
        $course->save();
        return redirect('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where('id', $id)
            ->orWhere('slug', $id)
            ->firstOrFail();
        $data = Data::all()->where('courseId', $course->id);
        //dd($data);
        $comments = Comment::all();
        return view('courses.show', compact('course', 'comments', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
