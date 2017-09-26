<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Http\Requests;
use App\UploadBook;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
class UploadBookController extends Controller
{

    public function buy()
    {
        $data = UploadBook::get();
        return view('buy')->with('data',$data);
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

     public function search() {

        $data = UploadBook::get();
        return view('buy')->with('data',$data);
        // Sets the parameters from the get request to the variables.
 /*       $name = Request::get('name');
        $hasCoffeeMachine = Request::get('hasCoffeeMachine');

        // Perform the query using Query Builder
        $result = DB::table('customers')
            ->select(DB::raw("*"))
            ->where('name', '=', $name)
            ->where('has_coffee_machine', '=', $hasCoffeeMachine)
            ->get();

        return $result;*/
    }

}
