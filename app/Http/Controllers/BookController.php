<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books=Book::all();

        return view('dashboard',['books'=>$books]);
    }

    function createBook(Request $request){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
    
        return $imageName;
        $request->image->storeAs(public_path('public'), $imageName);
        $newbook=new Book();
        $newbook->name=$request->bookname;
        $newbook->category=$request->category;
        $newbook->image=$imageName;
        $newbook->author_name=$request->author;
        $newbook->publish_date=$request->pb_date;
        $newbook->image_path='/storage/app/public';

        $newbook->save();

        return redirect('/');

    }
}
