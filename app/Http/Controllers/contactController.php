<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use View;
use Auth;
use Illuminate\Support\Facades\Redirect;

class contactController extends Controller
{
    public function index()
    {
        return View::make('contact');
    }

    public function store()
    {
        $input= Input::all();
        if(contact::store($input))
        {
            return View::make('contact_response')
                ->with('data',$input);
        }

    }


    public function display()
    {
        if(Auth::check())
        {
            $contact_us_details= contact::display();
            return View::make('contact_responses')
                ->with('contact_us_details',$contact_us_details);

        }
        else
        {
            return Redirect::intended('/login');
        }
    }
}
