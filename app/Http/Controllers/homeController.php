<?php

namespace App\Http\Controllers;

use App\visitors;
use View;
use Illuminate\Http\Request;

use App\Http\Requests;

class homeController extends Controller
{
    //

    public function index()
    {
        // to increase no of visitors by one
        visitors::increment_count();

        $no_of_visitors= visitors::visitors_count();

        return View::make('index')
            ->with('no_of_visitors',$no_of_visitors);
    }
}
