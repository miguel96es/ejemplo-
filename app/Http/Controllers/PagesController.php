<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home (){
        return view('home');
  }

  public function about (){
      return view('about');
}
public function single (){
    return view('single');
}
public function contact (){
    return view('contact');
}
public function under (){
    return view('under');
}

}
