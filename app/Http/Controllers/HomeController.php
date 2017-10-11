<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======

>>>>>>> 8f2a466ec131a807a8afde55d4a499db6ef685c8
use Illuminate\Http\Request;

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
    public function index()
    {
        if(Auth::check()){
<<<<<<< HEAD
            return view('pages.home');    
=======
            return view('home');    
>>>>>>> 8f2a466ec131a807a8afde55d4a499db6ef685c8
        }
        
        return Redirect::to('/login');
    }
}