<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Theme;
use App\User;
use Auth;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $users;
    var $mainPage = 'admin/user';
    var $index = 'user/index';
    var $form = 'user/form';
    var $store = 'Admin\UserController@store';
    var $destroy = 'Admin\UserController@destroy';
    var $update = 'Admin\UserController@update';
    var $edit = 'Admin\UserController@edit';

    public function __construct(User $user)
    {
        $this->users = $user;
        Theme::init('admin');
    }

    public function index()
    {
        $destroy = $this->destroy;
        $edit = $this->edit;
        $data = $this->users::where('id', '!=', 2)->get();
        $pageTitle = 'List User';
        return view($this->index,compact('data','destroy','edit','pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = 'POST';
        $action = $this->store;
        $pageTitle = 'Create User';
        return view($this->form,compact('method','action','pageTitle'));
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
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        
        /* retrive data */
        $this->users->name = $request->get('name');
        $this->users->email = $request->get('email');
        $this->users->password = bcrypt($request->get('password'));

        /* store data */
        $store = $this->users->save();

        /* redirect and notifiation */
        if($store){
            Alert::success('Create Data Success!!');
            return back();
        }else{
            Alert::error('Create Data Fail!');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $method = 'POST';
        $action = $this->update;
        $data = $this->users->findOrFail($id);
        $pageTitle = 'Edit User';
        return view($this->form,compact('data','method','action','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $this->users::find($id);
        /* check email */
        if($user->email!=$request->get('email')){
            $emailValidation = '|unique:users';
        }else{
            $emailValidation = '';
        }
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email'.$emailValidation,
            'password'=>'required'
        ]);

        /* retrive data */
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        /* update data */
        $update = $user->save();

        /* redirect and notifiation */
        if($update){
            Alert::success('Update Data Success!!');
            return redirect($this->mainPage);
        }else{
            Alert::error('Update Data Fail!');
            return redirect($this->mainPage);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* delete data */
        $user = $this->users::find($id);
        $delete = $user->delete();

        /* redirect and notifiation */
        if($delete){
            Alert::success('Delete Data Success!!');
            return redirect($this->mainPage);
        }else{
            Alert::error('Delete Data Fail!');
            return redirect($this->mainPage);
        }
    }
}
