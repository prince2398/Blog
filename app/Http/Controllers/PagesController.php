<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my Blog!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'This is about page';
        return view('pages.about')->with('title',$title);
    }
    public function posts(){
        $data = array(
            'title'=>'Keywords',
            'keys'=>['programming','coding','python','php']
        );
        return view('pages.posts')->with($data);
    }
    //
}
