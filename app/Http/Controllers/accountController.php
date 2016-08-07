<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use View;

class accountController extends Controller
{
    public function index()
    {
        return View::make('login');
    }





    public function login()
    {
        $input= Input::all();

        $userdata= array(
            'email' => $input['email'],
            'password' => $input['password']
        );

        if(Auth::validate($userdata))
        {
            if(Auth::attempt($userdata))
            {

                return Redirect::intended('/admin');
            }

            else
            {
                Session::flash('error','Something went wrong');
                return Redirect::to('/login_home');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::intended('/login');
    }
}
