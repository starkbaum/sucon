<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Keyword;
use App\Language;
use App\Snippet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SnippetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snippets = Snippet::with('customer')->get();
        $languages = Language::lists('name', 'id');

        return view('snippets.index', compact('snippets', 'languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::lists('name', 'id')->all();
        $languages = Language::lists('name', 'id')->all();
        $keywords = Keyword::lists('name', 'id')->all();

        return view('snippets.create', compact('customers', 'languages', 'keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create snippet with all provided data
        $snippet = Snippet::create($request->all());
        //create storage path
        $pathToSnippet = storage_path() . '/snippets/';

        //add customer id to customer_snippet
        $snippet->customer()->attach($request->input('customer'));
        //add languages id to language_snippet
        $snippet->languages()->attach($request->input('languages'));
        //add keywords id to keyword_snippet
        $snippet->keywords()->attach($request->input('keywords'));

        //create directory for snippet
        if (!File::isDirectory($pathToSnippet)) {
            File::makeDirectory($pathToSnippet);
        }
        File::makeDirectory($pathToSnippet . $snippet->slug);
        $snippet->path_to_material = $pathToSnippet . $snippet->slug;
        $snippet->save();
        return redirect('snippets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $snippet = Snippet::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        return view('snippets.show', compact('snippet'));
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
        //TODO check if user is admin
        if (true) {
            $snippet = Snippet::where('id', $id)->orWhere('slug', $id)->firstOrFail();
            File::deleteDirectory($snippet->path_to_material);
            $snippet->delete();
            return redirect('/snippets');
        }
    }
}
