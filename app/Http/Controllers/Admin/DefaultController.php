<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Theme;
use Alert;

class DefaultController extends Controller
{
    var $theme = 'admin';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Theme::init($this->theme);  
        return view('default.table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Theme::init($this->theme);  
        return view('default.form');
    }
}
