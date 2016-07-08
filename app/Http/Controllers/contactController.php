<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use View;

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
}
