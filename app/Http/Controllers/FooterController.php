<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function show_term_condition(){
        return view('term_condition');
    }

    public function show_aboutus(){
        return view('aboutus');
    }

    public function show_privacy(){
        return view('privacy');
    }

    public function show_activities(){
        return view('activities');
    }

    public function show_acceptable_use_policy(){
        return view('acceptableusepolicy');
    }

}
