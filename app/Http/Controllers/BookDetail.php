<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookDetail extends Controller
{
    public function GetBookbyId(Request $request){
        $bookdetail = Book::where('id', $request->id)->get();
        return view ('bookdetail',compact('bookdetail'));
    }
}
