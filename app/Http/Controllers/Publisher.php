<?php

namespace App\Http\Controllers;

use App\Models\Publisher as ModelsPublisher;
use Illuminate\Http\Request;


class Publisher extends Controller
{
    public function getAllPublisher() {
        $publisher = ModelsPublisher::all();
        return view('pub', compact('publisher'));
    }

    public function getPublisherbyId(Request $request) {
        $pub = ModelsPublisher::where('id', $request->id)->get();
        return view('pubdetail', compact('pub'));
    }
}
