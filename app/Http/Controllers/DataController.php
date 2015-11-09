<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if(Input::hasFile('file')) {
            echo 'Success, you uploaded a file';
            $file = Input::file('file');
            $name = $file->getClientOriginalName();
            $file->move(storage_path().'/Uploads', $file->getClientOriginalName());
            //echo 'The filename is '.$file->getClientOriginalName();
            echo '<br>';
            //echo '<img src="uploads/'.$file->getClientOriginalName() .'"/>';
            $pathToFile = storage_path().'/Uploads/';
            //echo $pathToFile.$name;
            // return response()->download($pathToFile.$name);
            // file retrieving: $contents = Storage::get('file.jpg');
            // deleting files: Storage::delete('file.jpg');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload()
    {
        echo 'Success, you uploaded a file';
        echo Input::get('test');

        if(Input::hasFile('file')) {
            echo 'Success, you uploaded a file';
            $file = Input::file('file');
            $path = Input::get('test');
            $name = $file->getClientOriginalName();
            $file->move(storage_path().'/Uploads/'.$path, $file->getClientOriginalName());
            echo 'The filename is '.$file->getClientOriginalName();
            echo '<br>';
            echo '<img src="uploads/'.$file->getClientOriginalName() .'"/>';
            $pathToFile = storage_path().'/Uploads/';
            echo $pathToFile.$name;

            // return response()->download($pathToFile.$name);
            // file retrieving: $contents = Storage::get('file.jpg');
            // deleting files: Storage::delete('file.jpg');
        }
    }
}
