<?php

namespace App\Http\Controllers;

use App\Data;
use Auth;
use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use URL;


class DataController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(Input::hasFile('file')) {
            $file = Input::file('file');
            $path = Input::get('test');
            $name = $file->getClientOriginalName();
            $courseId = NULL;
            $snippetId = NULL;

            //TODO implement if data is already uploaded

            $file->move($path, $file->getClientOriginalName());

            //check if course or snippet
            if (Input::get('typeClass') == 'course') {
                $courseId = Input::get('id');
            }
            if (Input::get('typeClass') == 'snippet') {
                $snippetId = Input::get('id');
            }

            $data = new Data([
                'name'          => Input::get('filename'),
                'path'          => $path . '/' . $name,
                'author'        => Auth::user()->name,
                'size'          => $file->getSize(),
                'courseId'      => $courseId,
                'snippetId'     => $snippetId,
                //TODO implement dynamically
                'languageId'    => 1
            ]);

            $data->save();

            return redirect(URL::previous());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Remove the specified resource from storage and database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Data::findOrFail($id);
        File::delete($file->path);
        $file->delete();
        return redirect(URL::previous());
    }

    /**
     * Downloads file with the given id
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download($id)
    {
        $file = Data::findOrFail($id);
        return response()->download($file->path);
    }
}
