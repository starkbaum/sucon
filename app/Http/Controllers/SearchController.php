<?php

namespace App\Http\Controllers;

use App\Course;
use App\Customer;
use App\Snippet;
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

    public function search()
    {
        $searchResults = Customer::search(Input::get('search-term'))->get();

        $test = 'TEST';

        return view('search.show', compact('searchResults', 'test'));
    }

    public function searchCourses()
    {
        $searchTerm = Input::get('search-term');
        $searchResults = Course::search($searchTerm)->get();

        return view('search.showCourses', compact('searchResults', 'searchTerm'));
    }

    public function searchSnippets()
    {
        $searchTerm = Input::get('search-term');
        $searchResults = Snippet::search($searchTerm)->get();

        return view('search.showSnippets', compact('searchResults', 'searchTerm'));
    }
}
