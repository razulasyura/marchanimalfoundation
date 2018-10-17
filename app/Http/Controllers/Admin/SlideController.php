<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Slide;
use Auth;
use Alert;
use Image;
use File;
// use Carbon\Carbon;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $slides;
    var $mainPage = 'admin/slide';
    var $index = 'slide/index';
    var $form = 'slide/form';
    var $imageOriginal = 'public/assets/themes/default/images/slide/';
    
    var $create = 'Admin\SlideController@create';
    var $store = 'Admin\SlideController@store';
    var $destroy = 'Admin\SlideController@destroy';
    var $edit = 'Admin\SlideController@edit';
    var $update = 'Admin\SlideController@update';

    public function __construct(Slide $slide)
    {
        $this->slides = $slide;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $edit = $this->edit;
        $data = $this->slides::All();
        $pageTitle = 'List Slide';
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
        $pageTitle = 'Create Slide';
        $image = $this->imageOriginal;
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
            'name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            'file'=>'required|image'
        ]);
        
        /* retrive data */
        $data = $request->except('file');
        $data['file'] = $filename = date('Ymdhis').'.jpg';
        // dd($data);
        /* store data */
        $store = $this->slides->create($data);

        /* redirect and notifiation */
        if($store){
            // upload image
            $img = Image::make(Input::file('file'))->fit(1980, 1280)->save($this->imageOriginal.$filename);

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
        $data = $this->slides->findOrFail($id);
        $pageTitle = 'Edit Slide';
        $image = $this->imageOriginal;
        return view($this->form,compact('data','action','destroy','pageTitle','image'));
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
        $slide = $this->slides::find($id);
        $oldFile = $slide->file;
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            // 'file'=>'required|image'
        ]);
        
        /* retrive data */
        $slide->name = $request->get('name');
        $slide->name_en = $request->get('name_en');
        $slide->description = $request->get('description');
        $slide->description_en = $request->get('description_en');
        if($request->file('file')!=NULL){
            $slide->file = $filename = date('Ymdhis').'.jpg';        
            $delete = File::delete($this->imageOriginal.$oldFile);
            $img = Image::make(Input::file('file'))->fit(1980, 1280)->save($this->imageOriginal.$filename);
        }

        /* update data */
        $update = $slide->save();

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
        $slide = $this->slides::find($id);
        $delImage = File::delete($this->imageOriginal.$slide->file);
        $delete = $slide->delete();

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
