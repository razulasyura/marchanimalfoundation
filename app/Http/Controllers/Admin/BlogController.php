<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Theme;
use App\Blog;
use App\Article;
use Auth;
use Alert;
use Image;
use File;
// use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $blogs;
    var $mainPage = 'admin/blog';
    var $index = 'blog/index';
    var $form = 'blog/form';
    var $imageOriginal = 'public/assets/themes/default/images/article/';

    var $create = 'Admin\BlogController@create';
    var $store = 'Admin\BlogController@store';
    var $destroy = 'Admin\BlogController@destroy';
    var $edit = 'Admin\BlogController@edit';
    var $update = 'Admin\BlogController@update';

    public function __construct(Blog $blog)
    {
        $this->blogs = $blog;
        Theme::init('admin');
    }

    public function index()
    {
        $create = $this->create;
        $edit = $this->edit;
        $data = $this->blogs::where('is_deleted','F')->get();
        $pageTitle = 'List Article';
        return view($this->index,compact('data','edit','pageTitle','create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = New Article;
        $article = $articles->all();        
        $action = $this->store;
        $pageTitle = 'Create Article';
        return view($this->form,compact('action','pageTitle','article'));
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
            // 'author'=>'required',
            // 'author_title'=>'required',
            'file'=>'required|image',
            'article_id'=>'required',
        ]);
        
        /* retrive data */
        $data = $request->except('file');
        $data['file'] = $filename = date('Ymdhis').'.jpg';
        // dd($data);
        /* store data */
        $store = $this->blogs->create($data);

        /* redirect and notifiation */
        if($store){
            // upload image
            $img = Image::make(Input::file('file'))->fit(265,195)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(540,480)->save($this->imageOriginal.'original/'.$filename);

            // notice and return to page
            Alert::success('Create Data Success!!');
            // return back();
            return redirect($this->mainPage);
        }else{
            // notice and return to page
            Alert::error('Create Data Fail!');
            // return back();
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
        $articles = New Article;
        $article = $articles->all();
        $action = $this->update;
        $destroy = $this->destroy;
        $data = $this->blogs->findOrFail($id);
        $pageTitle = 'Edit Article';
        $image = $this->imageOriginal;
        return view($this->form,compact('data','action','pageTitle','image','article','destroy'));
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
        $blog = $this->blogs::find($id);
        $oldFile = $blog->file;
        /* validation */
        $this->validate(request(),[
            'name'=>'required',
            'name_en'=>'required',
            'description_name'=>'required',
            'description_name_en'=>'required',
            'description'=>'required',
            'description_en'=>'required',
            // 'author'=>'required',
            // 'author_title'=>'required',
            // 'file'=>'required|image',
            'article_id'=>'required',
        ]);
        
        /* retrive data */
        $blog->name = $request->get('name');
        $blog->name_en = $request->get('name_en');
        $blog->description_name = $request->get('description_name');
        $blog->description_name_en = $request->get('description_name_en');
        $blog->description = $request->get('description');
        $blog->description_en = $request->get('description_en');
        $blog->author = $request->get('author');
        $blog->author_title = $request->get('author_title');
        $blog->article_id = $request->get('article_id');
        
        if($request->file('file')!=NULL){
            $blog->file = $filename = date('Ymdhis').'.jpg';
            File::delete($this->imageOriginal.$oldFile);
            File::delete($this->imageOriginal.'original/'.$oldFile);
            $img = Image::make(Input::file('file'))->fit(265,195)->save($this->imageOriginal.$filename);
            $imgDetail = Image::make(Input::file('file'))->fit(540,480)->save($this->imageOriginal.'original/'.$filename);
        }

        /* update data */
        $update = $blog->save();

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
        $blog = $this->blogs::find($id);
        $blog->is_deleted = 'T';
        $delete = $blog->save();

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
