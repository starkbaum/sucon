<?php

namespace App\Http\Controllers;

use App\Data;
use App\Http\Requests\DataRequest;
use App\VideoStream;
use Auth;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Redirect;
use Response;
use URL;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('partials.addFile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DataRequest|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $path = $request->input('test');
            $name = $file->getClientOriginalName();
            $courseId = null;
            $snippetId = null;

            $file->move($path, $file->getClientOriginalName());

            //check if course or snippet
            if ($request->input('typeClass') == 'course') {
                $courseId = $request->input('id');
            }
            if ($request->get('typeClass') == 'snippet') {
                $snippetId = $request->input('id');
            }

            $data = new Data([
                'name'          => $request->input('name'),
                'path'          => $path.'/'.$name,
                'author'        => Auth::user()->name,
                'size'          => $file->getSize(),
                'extension'     => $file->getClientOriginalExtension(),
                'courseId'      => $courseId,
                'snippetId'     => $snippetId,
            ]);
            $data->save();

            return redirect(URL::previous());
        }
    }

    /**
     * Remove the specified resource from storage and database.
     *
     * @param int $id
     *
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
     * Downloads file with the given id.
     *
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download($id)
    {
        $file = Data::findOrFail($id);

        return response()->download($file->path);
    }

    //TODO wenn keine fehlermeldung
    //TODO check is_accepted flag
    public function showPdf($id)
    {
        $foundFile = Data::findOrFail($id);
        $filename = $foundFile->path; /* Note: Always use .pdf at the end. */

        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$filename.'"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');

        return readfile($filename);
    }

    public function getVideo($id)
    {
        $foundFile = Data::findOrFail($id);
        //must have .pdf at end
        $filename = $foundFile->path;
        $stream = new VideoStream($filename);

        return $stream->start();
    }

    public function acceptData($id)
    {
        $data = Data::findOrFail($id);
        $data->is_accepted = true;
        $data->save();

        return Redirect::action('AdminController@fileAcceptance');
    }
}
