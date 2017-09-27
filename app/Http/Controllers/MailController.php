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

    Mail::raw('Congratulations! you have successfully purchased this book
        Thank you for using Bookworm!', function($message)
    {
        $message->to('ananya.navelkar@gmail.com');
    });
    return redirect('buy');

        
 }
}