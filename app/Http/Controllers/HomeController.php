<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// $user = $_POST['user'];
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function indexclark()
    {
       return view('clark/dashboard');
    }
     public function index()
    {
       return view('home');
    }
}
