<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Http\Requests;
use App\UploadBook;
use Response;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\User;
use Illuminate\Support\Facades\Route;
class UploadBookController extends Controller
{

    public function buy()
    {
        $users = DB::table('users')
            ->join('books_uploaded', 'users.id', '=', 'books_uploaded.uploader_UID')->get();
        return view('buy')->with('data',$users);
    }
/*
    public function create()
    {
        return view('sell');
    }
*/
    public function index()
    {
        return view('/sell');
        
    }
    public function storeBookDetails(Request $request)
    {
        
    
      
            //UploadBook::create(Request::all());
        //return redirect('buy');


    	$uploadedbook = new UploadBook;
        $uploadedbook->uploader_UID=Input::get('uploader_UID');
        $uploadedbook->book_name = Input::get('book_name');
        $uploadedbook->book_author = Input::get('book_author');
        $uploadedbook->book_edition = Input::get('book_edition');
        $uploadedbook->subject = Input::get('subject');
        $uploadedbook->year =Input::get('year');
        $uploadedbook->branch =Input::get('branch');
        $uploadedbook->price = Input::get('price');
        if(Input::hasFile('uploadimage'))
        {
            error_log('In');
            $file=Input::file('uploadimage');
            $file->move(public_path(). '/',$file->getClientOriginalName() );
          $uploadedbook->uploadimage=$file->getClientOriginalName();  
        }
        //$temp=$request->uploadimage;
        //error_log($temp);
        //$uploadedbook->uploadimage = $request->file('uploadimage')->storeAs('UploadedImages',$request->book_name);
    	$uploadedbook->save(); 
        return redirect('sell');
        //return Response::json($uploadedbook);

    }

     public function searchFE() {
    $users=DB::table('users')
        ->join('books_uploaded', function ($join){
            $join->on('users.id', '=', 'books_uploaded.uploader_UID')
                 ->where('books_uploaded.year', '=', 'FE');
        })->get();

        error_log($users);
                return view('buy')->with('data',$users);
    }


     public function searchSE() {
    $users=DB::table('users')
        ->join('books_uploaded', function ($join){
            $join->on('users.id', '=', 'books_uploaded.uploader_UID')
                 ->where('books_uploaded.year', '=', 'SE');
        })->get();

        error_log($users);
                return view('buy')->with('data',$users);
    }

         public function searchTE() {
    $users=DB::table('users')
        ->join('books_uploaded', function ($join){
            $join->on('users.id', '=', 'books_uploaded.uploader_UID')
                 ->where('books_uploaded.year', '=', 'TE');
        })->get();

        error_log($users);
                return view('buy')->with('data',$users);
    }

     public function searchBE() {
    $users=DB::table('users')
        ->join('books_uploaded', function ($join){
            $join->on('users.id', '=', 'books_uploaded.uploader_UID')
                 ->where('books_uploaded.year', '=', 'BE');
        })->get();

        error_log($users);
                return view('buy')->with('data',$users);
    }


}
