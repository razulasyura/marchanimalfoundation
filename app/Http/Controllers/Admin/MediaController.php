<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Gallery;
use Auth;
use Alert;
use Image;
use File;
// use Carbon\Carbon;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $galleries;
    var $mainPage = 'admin/media';
    var $index = 'media/index';
    var $form = 'media/form';
    var $imageLocation = 'public/assets/themes/default/images/gallery/';
    
    var $create = 'Admin\MediaController@create';
    var $store = 'Admin\MediaController@store';
    var $destroy = 'Admin\MediaController@destroy';
    var $edit = 'Admin\MediaController@edit';
    var $update = 'Admin\MediaController@update';

    public function __construct(Gallery $gallery)
    {
        $this->galleries = $gallery;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $edit = $this->edit;
        $data = $this->galleries::where('is_media','T')->orderBy('created_at','DESC')->paginate(12);
        $pageTitle = 'List Media';
        $image = $this->imageLocation;
        return view($this->index,compact('data','edit','destroy','pageTitle','create','image'));
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
        $pageTitle = 'Create Media';
        $image = $this->imageLocation;
        return view($this->form,compact('action','pageTitle','image'));
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
            'file'=>'required|image'
        ]);
        
        /* retrive data */
        $data = $request->except('file');
        $data['file'] = $filename = date('Ymdhis').'.jpg';
        $data['is_media'] = 'T';
        /* store data */
        $store = $this->galleries->create($data);

        /* redirect and notifiation */
        if($store){
            // upload image
            $img = Image::make(Input::file('file'))->fit(245, 135)->save($this->imageLocation.$filename);
            $imgOriginal = Image::make(Input::file('file'))->save($this->imageLocation.'original/'.$filename);

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
        $data = $this->galleries->findOrFail($id);
        $pageTitle = 'Edit Media';
        $image = $this->imageLocation;
        return view($this->form,compact('data','action','pageTitle','image'));
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
        $gallery = $this->galleries::find($id);
        $oldFile = $gallery->file;
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
            // 'file'=>'required|image'
        ]);
        
        /* retrive data */
        $gallery->name = $request->get('name');
        $gallery->name_en = $request->get('name_en');
        $gallery->description = $request->get('description');
        $gallery->description_en = $request->get('description_en');
        if($request->file('file')!=NULL){
            $gallery->file = $filename = date('Ymdhis').'.jpg';        
            $delete = File::delete($this->imageLocation.$oldFile);
            $delete = File::delete($this->imageLocation.'original/'.$oldFile);
            $img = Image::make(Input::file('file'))->fit(1980, 1280)->save($this->imageLocation.$filename);
            $img = Image::make(Input::file('file'))->save($this->imageLocation.'original/'.$filename);

        }

        /* update data */
        $update = $gallery->save();

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
        $gallery = $this->galleries::find($id);
        $delImage = File::delete($this->imageLocation.$gallery->file);
        $delImage = File::delete($this->imageLocation.'original/'.$gallery->file);
        $delete = $gallery->delete();

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
