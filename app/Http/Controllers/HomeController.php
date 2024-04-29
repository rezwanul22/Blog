<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function about(){
        return view('front-end.about.about');
    }
    public function service(){
        return view('front-end.service.service');
    }
    public function departments(){
        return view('front-end.departments.departments');
    }
    public function doctors(){
        return view('front-end.doctors.doctors');
    }
    public function contact(){
        return view('front-end.contact.contact');
    }
    public function blog(){
        return view('front-end.blog.blog');
    }
}
