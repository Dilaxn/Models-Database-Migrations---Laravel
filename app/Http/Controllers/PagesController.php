<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        $title = "Hello!";
        // return view('pages.welcome',compact('title'));
        return view('pages.welcome')->with('title', $title);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['se', 'programming', 'networking']
        );
        return view('pages.services')->with($data);
    }
}
