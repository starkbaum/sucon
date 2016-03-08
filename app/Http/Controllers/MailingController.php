<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailingController extends Controller
{
    public function sendTestMail()
    {
        Mail::raw('Und gleich noch einmal um einen anderen Absender zu testen', function($message)
        {
            $message->to('starkbaum.stefan@gmail.com');
        });
    }

    public function sendFile($id)
    {
        $file = Data::findOrFail($id);
        $pathToFile = $file->path;

        //dd($pathToFile);


        Mail::raw('Und gleich noch einmal um einen anderen Absender zu testen', function($message) use ($pathToFile, $file)
        {
            $message->to('sta16638@spengergasse.at');
            $message->subject('DataTest');
            $message->attach($pathToFile, ['as' => $file->name, 'mime' => 'application/pdf']);
        });

        //TODO correct redirect

    }
}
