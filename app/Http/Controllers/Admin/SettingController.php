<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use Alert;
use Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $albums;
    var $mainPage = 'admin/setting';
    var $index = 'setting/index';
    var $store = 'Admin\SettingController@store';

    public function __construct()
    {
        Theme::init('admin');
    }

    public function index()
    {
        $action = $this->store;
        $pageTitle = 'Setting Application';
        return view($this->index,compact('action','pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validation */
        $this->validate(request(),[
            'application'=>'required',
            'motto'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]);
        Setting::set('application',$request->get('application'));
        Setting::set('motto',$request->get('motto'));
        Setting::set('phone',$request->get('phone'));
        Setting::set('email',$request->get('email'));
        Setting::set('address',$request->get('address'));
        Setting::save();

        Alert::success('Update Data Success!!');
        return redirect($this->mainPage);
        
    }
}
