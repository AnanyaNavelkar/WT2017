<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
     public function build()
    {

    Mail::raw('Abha Mutalik is interested in purchasing your book.
    Contact Details of Abha Mutalik are:
     abhamutalik@gmail.com
        Thank you for using Bookworm!', function($message)
    {
        $message->to('ananya.navelkar@gmail.com');
    });
    return redirect('buy');

        
 }
}