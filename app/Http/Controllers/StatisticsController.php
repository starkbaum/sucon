<?php

namespace App\Http\Controllers;

use App\Course;
use App\Data;
use App\Snippet;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tracker;

class StatisticsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $numberOfPageViews = $this->numberOfPageVisits();
        //dd($numberOfPageViews);
        $numberOfViewsPerCourse = $this->numberOfViewsPerCourse();
        //dd($numberOfViewsPerCourse);
        $numberOfViewsPerSnippet = $this->numberOfViewsPerSnippet();
        //Data for menu
        $dataForAcceptance = Data::notAccepted()->get();
        $countNotAcceptedFiles = count($dataForAcceptance);

        return view('admin.statistics.index', compact('numberOfPageViews', 'numberOfViewsPerCourse', 'numberOfViewsPerSnippet', 'countNotAcceptedFiles'));
    }


    public function numberOfViewsPerCourse() {

        $courses = Course::all();

        $viewsByCourse = [];

        foreach($courses as $course) {

            $viewsByCourse[$course->name] = [$this->getCountOfCourseRoute($course)];
        }

        return $viewsByCourse;
    }

    //TODO find better name
    public function getCountOfCourseRoute($course) {
        $tracker = Tracker::logByRouteName('courses.show')->where(function($query) use ($course) {
            $query->where('path', 'courses/' . $course->slug);
        }, $course)->count();

        return $tracker;
    }


    public function numberOfViewsPerSnippet() {

        $snippets = Snippet::all();

        $viewsPerSnippet = [];

        foreach($snippets as $snippet) {

            $viewsPerSnippet[$snippet->name] = [$this->getCountOfViewsPerSnippet($snippet)];
        }

        return $viewsPerSnippet;
    }

    public function getCountOfViewsPerSnippet($snippet)
    {
        $tracker = Tracker::logByRouteName('snippets.show')->where(function($query) use ($snippet) {
            $query->where('path', 'snippets/' . $snippet->slug);
        }, $snippet)->count();

        return $tracker;
    }

    public function numberOfPageVisits() {

        $pageViews = Tracker::pageViews(60 * 24 * 30);
        $allPageViews = [];

        foreach($pageViews as $pageView) {
            $allPageViews[$pageView['date']] = [$pageView['total']];
        }

        //  dd($allPageViews);


        return $allPageViews;


    }

    public function getAllRoutes()
    {
        $allRoutes = \Route::getRoutes();
    }
}
