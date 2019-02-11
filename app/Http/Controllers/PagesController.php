<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome the Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'This is the About';
        return view('pages.about')->with('myTitle', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['tamim', 'arefin', 'Anik']
        );

        return view('pages.services')->with($data);
    }
}
