<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        return view('Home');
    }
    public function about(Request $request){
        return view('About');
    }
    public function service(Request $request){
        return view('Service');
    }
    public function portfolio(Request $request){
        return view('Portfolio');
    }
    public function client(Request $request){
        return view('Clients');
    }
    public function contact(Request $request){
        return view('Contact');
    }
}
