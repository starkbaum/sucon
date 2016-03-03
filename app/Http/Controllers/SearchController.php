<?php

namespace App\Http\Controllers;

use App\Course;
use App\Customer;
use App\Snippet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class SearchController extends Controller
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


        $searchResults = Customer::search('ger')->get();

        return view('search.index', compact('searchResults'));



    }

    public function search() {
        $searchResults = Customer::search(Input::get('search-term'))->get();

        $test = "TEST";

        return view('search.show', compact('searchResults', 'test'));

    }

    public function searchCourses() {
        $searchResults = Course::search(Input::get('search-term'))->get();
        return view('search.show', compact('searchResults'));

    }

    public function searchSnippets() {
        $searchResults = Snippet::search(Input::get('search-term'))->get();
        return view('search.show', compact('searchResults'));
    }


}
