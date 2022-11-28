<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookCategory extends Controller
{
    public function getBookbyCategory(Request $request){
        $category = Category::where('id', $request->id)->with('BookCategory')->get();
        return view('bookcat', compact('category'));
    }
}
