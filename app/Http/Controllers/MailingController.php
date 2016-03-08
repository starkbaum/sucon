<?php

namespace App\Http\Controllers;

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
            $message->to('moji_hafezi@hotmail.com');
            $message->to('krassnig@gmx.net');
            $message->to('starkbaum.stefan@gmail.com');
        });
    }
}
