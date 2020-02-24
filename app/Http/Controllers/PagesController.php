<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Laravel Testing';
        return view ('pages.index', compact('title'));
    }

    public function about(){
        $title = 'Laravel About Testing';
        return view ('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Laravel Testing Services',
            'services' => ['Blog' , 'Test' , 'Laravel']
        );
        return view ('pages.services')->with($data);
    }
}
