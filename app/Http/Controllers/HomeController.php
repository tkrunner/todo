<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function show($id){
    //     return $id;
    // }
    // public function create(){
    //     return "สวัสดี";
    // }
    // public function store(){
    //     return "สวัสดี";
    // }
    // public function update(){
    //     return "สวัสดี";
    //  }
    //  public function delete($id){
    //     return $id;
    // }
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }

}
