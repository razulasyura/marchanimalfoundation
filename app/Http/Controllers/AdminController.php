<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Alert;

class AdminController extends Controller
{
	var $theme = 'admin';

    public function admin()
    {
        Theme::init($this->theme);
        Alert::success('Good job!');
        $page_title = "general.text.welcome";
        $page_description = "This is the welcome page";  
        return view('hello', compact('page_title'));
    }
}
