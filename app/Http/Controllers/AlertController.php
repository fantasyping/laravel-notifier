<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AlertController extends Controller
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
     * Show the form for selecting a model.
     *
     *
     * @return 
     */
    public function modelList() 
    {
		return view('pages.customers.modelList');
    }
    /**
     * Show the form for creating a alert.
     *
     *
     * @return 
     */
    public function create() 
    {
        return view('pages.customers.createAlert');
    }
    public function createSecond()
    {
        return view('pages.customers.createAlert1');   
    }
}
