<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Course;
use App\Data;
use App\Http\Requests\CoursesRequest;
use App\Keyword;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Redirect;

class CoursesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $languages = Language::lists('name', 'id');

        return view('courses.index', compact('courses', 'languages'));
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
    public function store(CoursesRequest $request)
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
        //returns course with given id or slug
        $course = Course::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        //fetches all data where course id is given id
        $data = Data::where('courseId', $course->id)->accepted()->get();
        //fetches all Videos
        $videos = Data::where('extension', 'AVI')->orWhere('extension', 'avi')->orWhere('extension', 'MP4')->get();
        //dd($videos);
        //fetches all comments where course id is given id
        $comments = Comment::where('courseId', $course->id)->get();
        //fetches all keywords
        $keywords = Keyword::lists('name', 'id')->all();
        //returns view and gives it the fetched course, comments and data
        return view('courses.show', compact('course', 'comments', 'data', 'videos', 'keywords'));
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

    public function toggleLike($id)
    {
        $course = Course::findOrFail($id);
        $course->toggleLike();
        return Redirect::action('CoursesController@show', [$course->slug]);
    }

}
