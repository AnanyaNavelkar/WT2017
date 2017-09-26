<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('mail', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('ananya.navelkar@gmail.com', 'Christian Nwamba');

            $message->to('ananya.navelkar@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
}