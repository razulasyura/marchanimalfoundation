<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Event;
use App\Album;
use Auth;
use Alert;
use Image;
use File;
// use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $events;
    var $mainPage = 'admin/event';
    var $index = 'event/index';
    var $form = 'event/form';
    var $imageOriginal = 'public/assets/themes/default/images/event/';
    var $height = '960';
    var $width = '720';

    var $create = 'Admin\EventController@create';
    var $store = 'Admin\EventController@store';
    var $destroy = 'Admin\EventController@destroy';
    var $edit = 'Admin\EventController@edit';
    var $update = 'Admin\EventController@update';

    public function __construct(Event $event)
    {
        $this->events = $event;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $destroy = $this->destroy;
        $edit = $this->edit;
        $data = $this->events::where('is_deleted','F')->get();
        $pageTitle = 'List Event';
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
        $albums = New Album;
        $album = $albums->all();        
        $action = $this->store;
        $pageTitle = 'Create Event';
        $image = $this->imageOriginal;
        return view($this->form,compact('action','pageTitle','image','album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit','160M');
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'host'=>'required',            
            'description_name'=>'required',
            'description_name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            'time'=>'required',
            'time_en'=>'required',
            'location'=>'required',
            'file'=>'required|image',
            'album_id'=>'required',
        ]);
        
        /* retrive data */
        $data = $request->except('file');
        $data['file'] = $filename = date('Ymdhis').'.jpg';
        // dd($data);
        /* store data */
        $store = $this->events->create($data);

        /* redirect and notifiation */
        if($store){
            // upload image
            $img = Image::make(Input::file('file'))->fit($this->height, $this->width)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(755,480)->save($this->imageOriginal.'detail/'.$filename);

            // notice and return to page
            Alert::success('Create Data Success!!');
            return back();
        }else{
            // notice and return to page
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
        // $method = 'POST';
        $albums = New Album;
        $album = $albums->all();
        $action = $this->update;
        $data = $this->events->findOrFail($id);
        $pageTitle = 'Edit Event';
        $image = $this->imageOriginal;
        return view($this->form,compact('data','action','pageTitle','image','album'));
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
        ini_set('memory_limit','160M');
        $event = $this->events::find($id);
        $oldFile = $event->file;
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'host'=>'required',            
            'description_name'=>'required',
            'description_name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            'time'=>'required',
            'time_en'=>'required',
            'location'=>'required',
        // 'file'=>'required|image',
            'album_id'=>'required',
        ]);
        
        /* retrive data */
        $event->name = $request->get('name');
        $event->name_en = $request->get('name_en');
        $event->host = $request->get('host');
        $event->description_name = $request->get('description_name');
        $event->description_name_en = $request->get('description_en');
        $event->description = $request->get('description');
        $event->description_en = $request->get('description_en');
        $event->time = $request->get('time');
        $event->time_en = $request->get('time_en');
        $event->location = $request->get('location');
        $event->album_id = $request->get('album_id');
        
        if($request->file('file')!=NULL){
            $event->file = $filename = date('Ymdhis').'.jpg';
            $delete = File::delete($this->imageOriginal.$oldFile);
            $delete = File::delete($this->imageOriginal.'detail/'.$oldFile);
            $img = Image::make(Input::file('file'))->fit(1980, 1280)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(755,480)->save($this->imageOriginal.'detail/'.$filename);
        }

        /* update data */
        $update = $event->save();

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
        $event = $this->events::find($id);
        $event->is_deleted = 'T';
        $delete = $event->save();

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
