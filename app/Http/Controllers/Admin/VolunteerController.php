<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Volunteer;
use Auth;
use Alert;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $volunteers;
    var $mainPage = 'admin/volunteer';
    var $index = 'volunteer/index';
    var $form = 'volunteer/form';
    var $create = 'Admin\VolunteerController@create';
    var $store = 'Admin\VolunteerController@store';
    var $destroy = 'Admin\VolunteerController@destroy';
    var $edit = 'Admin\VolunteerController@edit';
    var $update = 'Admin\VolunteerController@update';

    public function __construct(Volunteer $volunteer)
    {
        $this->volunteers = $volunteer;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $edit = $this->edit;
        $data = $this->volunteers::All();
        $pageTitle = 'List Volunteer';
        return view($this->index,compact('data','edit','pageTitle','create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $method = 'POST';
        $action = $this->store;
        $pageTitle = 'Create Volunteer';
        return view($this->form,compact('action','pageTitle'));
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
            'location'=>'required',
        ]);
        
        /* retrive data */
        $data = $request->all();
        /* store data */
        $store = $this->volunteers->create($data);

        /* redirect and notifiation */
        if($store){
            // notice and return to page
            Alert::success('Create Data Success!!');
            return redirect($this->mainPage);
        }else{
            // notice and return to page
            Alert::error('Create Data Fail!');
            return redirect($this->mainPage);
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
        // $method = 'POST';
        $action = $this->update;
        $destroy = $this->destroy;
        $data = $this->volunteers->findOrFail($id);
        $pageTitle = 'Edit Volunteer';
        return view($this->form,compact('data','action','destroy','pageTitle'));
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
        $volunteer = $this->volunteers::find($id);
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'location'=>'required',
        ]);
        
        /* retrive data */
        $volunteer->name = $request->get('name');
        $volunteer->location = $request->get('location');

        /* update data */
        $update = $volunteer->save();

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
        $volunteer = $this->volunteers::find($id);
        $delete = $volunteer->delete();

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
