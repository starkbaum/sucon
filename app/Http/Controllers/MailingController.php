<?php

namespace App\Http\Controllers;

use App\Course;
use App\Data;
use App\Snippet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Mail;
use Redirect;
use Validator;

class MailingController extends Controller
{
    public function sendTestMail()
    {
        Mail::raw('Und gleich noch einmal um einen anderen Absender zu testen', function ($message) {
            $message->to('starkbaum.stefan@gmail.com');
        });
    }

    public function create($id)
    {
        $file = Data::findOrFail($id);

        return view('mail.create', compact('file', 'users'));
    }

    public function sendMail($id)
    {
        $file = Data::findOrFail($id);
        $pathToFile = $file->path;

        Mail::raw(Input::get('body'), function ($message) use ($pathToFile, $file) {
            $message->to(Input::get('email'));
            $message->subject(Input::get('subject'));
            $message->attach($pathToFile, ['as' => $file->name, 'mime' => 'application/pdf']);
        });

        if($file->courseId != null) {

            $course = Course::findOrFail($file->courseId);

            return Redirect::action('CoursesController@showParam', [$course->slug]);
        }
        if($file->snippetId != null) {
            $snippet = Snippet::findOrFail($file->snippetId);

            return Redirect::action('CoursesController@show', [$snippet->slug]);
        }

    }
}
