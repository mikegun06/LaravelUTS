<?php

namespace App\Http\Controllers;

use App\Models\Book as ModelsBook;
use Illuminate\Http\Request;

class Book extends Controller
{
    public function index() {
        $book = ModelsBook::all();
        return view('home',compact('book'));
    }
}
