<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Album;
use Auth;
use Alert;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $albums;
    var $mainPage = 'admin/album';
    var $index = 'album/index';
    var $form = 'album/form';
    var $create = 'Admin\AlbumController@create';
    var $store = 'Admin\AlbumController@store';
    var $destroy = 'Admin\AlbumController@destroy';
    var $edit = 'Admin\AlbumController@edit';
    var $update = 'Admin\AlbumController@update';

    public function __construct(Album $album)
    {
        $this->albums = $album;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $destroy = $this->destroy;
        $edit = $this->edit;
        $data = $this->albums::where('is_deleted','F')->get();
        $pageTitle = 'List Album';
        return view($this->index,compact('data','edit','destroy','pageTitle','create'));
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
        $pageTitle = 'Create Album';
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
            'description'=>'required',
        ]);
        
        /* retrive data */
        $data = $request->all();
        // dd($data);
        /* store data */
        $store = $this->albums->create($data);

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
        $action = $this->update;
        $data = $this->albums->findOrFail($id);
        $pageTitle = 'Edit Album';
        return view($this->form,compact('data','action','pageTitle'));
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
        $album = $this->albums::find($id);
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
        ]);
        
        /* retrive data */
        $album->name = $request->get('name');
        $album->description = $request->get('description');

        /* update data */
        $update = $album->save();

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
        $album = $this->albums::find($id);
        $album->is_deleted = 'T';
        $delete = $album->save();

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
