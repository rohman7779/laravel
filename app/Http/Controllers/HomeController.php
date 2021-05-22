<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home0266");
    }
    public function artikel(){
        return view("artikel0266");
    }
    public function contact(){
        return view("contact0266");
    }
}