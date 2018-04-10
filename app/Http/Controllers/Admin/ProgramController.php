<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Program;
use Auth;
use Alert;
use Image;
use File;
// use Carbon\Carbon;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $programs;
    var $mainPage = 'admin/program';
    var $index = 'program/index';
    var $form = 'program/form';
    var $imageOriginal = 'public/assets/themes/default/images/program/';

    var $create = 'Admin\ProgramController@create';
    var $store = 'Admin\ProgramController@store';
    var $destroy = 'Admin\ProgramController@destroy';
    var $edit = 'Admin\ProgramController@edit';
    var $update = 'Admin\ProgramController@update';

    public function __construct(Program $program)
    {
        $this->programs = $program;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $destroy = $this->destroy;
        $edit = $this->edit;
        $data = $this->programs::where('is_deleted','F')->get();
        $pageTitle = 'List Program';
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
        $pageTitle = 'Create Program';
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
        ini_set('memory_limit','160M');
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'description_name'=>'required',
            'description_name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            'file'=>'required|image',
        ]);
        
        /* retrive data */
        $data = $request->except('file');
        $data['file'] = $filename = date('Ymdhis').'.jpg';
        // dd($data);
        /* store data */
        $store = $this->programs->create($data);

        /* redirect and notifiation */
        if($store){
            // upload image
            $img = Image::make(Input::file('file'))->fit(360, 220)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(960,720)->save($this->imageOriginal.'detail/'.$filename);
            $imgFront = Image::make(Input::file('file'))->fit(290,290)->save($this->imageOriginal.'front/'.$filename);

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
        $data = $this->programs->findOrFail($id);
        $pageTitle = 'Edit Program';
        $image = $this->imageOriginal;
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
        $program = $this->programs::find($id);
        $oldFile = $program->file;
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'description_name'=>'required',
            'description_name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            // 'file'=>'required|image',
        ]);
        
        /* retrive data */
        $program->name = $request->get('name');
        $program->name_en = $request->get('name_en');
        $program->description_name = $request->get('description_name');
        $program->description_name_en = $request->get('description_name_en');
        $program->description = $request->get('description');
        $program->description_en = $request->get('description_en');
        
        if($request->file('file')!=NULL){
            $program->file = $filename = date('Ymdhis').'.jpg';        
            $delete = File::delete($this->imageOriginal.$oldFile);
            $delete = File::delete($this->imageOriginal.'detail/'.$oldFile);
            $delete = File::delete($this->imageOriginal.'front/'.$oldFile);
            $img = Image::make(Input::file('file'))->fit(360, 220)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(960,720)->save($this->imageOriginal.'detail/'.$filename);
            $imgFront = Image::make(Input::file('file'))->fit(290,290)->save($this->imageOriginal.'front/'.$filename);
        }

        /* update data */
        $update = $program->save();

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
        $program = $this->programs::find($id);
        $program->is_deleted = 'T';
        $delete = $program->save();

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
