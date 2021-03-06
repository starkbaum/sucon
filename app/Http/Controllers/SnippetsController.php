<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Data;
use App\Http\Requests\SnippetsRequest;
use App\Snippet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SnippetsController extends Controller
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
        $snippets = Snippet::with('customer')->get();

        return view('snippets.index', compact('snippets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::lists('name', 'id')->all();

        return view('snippets.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SnippetsRequest|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SnippetsRequest $request)
    {
        //create snippet with all provided data
        $snippet = Snippet::create($request->all());
        //create storage path
        $pathToSnippet = storage_path().'/snippets/';

        //add customer id to customer_snippet
        $snippet->customer()->attach($request->input('customer'));

        //create directory for snippet
        if (!File::isDirectory($pathToSnippet)) {
            File::makeDirectory($pathToSnippet);
        }
        File::makeDirectory($pathToSnippet.$snippet->slug);
        $snippet->path_to_material = $pathToSnippet.$snippet->slug;
        $snippet->save();

        return redirect('snippets');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $snippet = Snippet::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        //fetch all data associated with the snippet
        $data = Data::where('snippetId', $snippet->id)->accepted()->get();

        return view('snippets.show', compact('snippet', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //TODO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //TODO
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //TODO check if user is admin
        if (\Auth::user()->isUserAdmin()) {
            $snippet = Snippet::where('id', $id)->orWhere('slug', $id)->firstOrFail();
            File::deleteDirectory($snippet->path_to_material);
            $snippet->delete();

            return redirect('/snippets');
        }
    }
}
