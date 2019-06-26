<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\db_model\Category;

class homeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.mainpage');
    }

    public function newReceipt()
    {
    	return view('frontend.newreceipt');		
    }

     public function setting()
    {
    	return view('frontend.setting');		
    }
}
