<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use View;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

class adminController extends Controller
{
    public function index()
    {
        //check weather the user is logged in or not
        if(Auth::check())
        {
            // user is logged in
            return View::make('admin');
        }
        else {
            return Redirect::intended('/login');
        }
    }




}
