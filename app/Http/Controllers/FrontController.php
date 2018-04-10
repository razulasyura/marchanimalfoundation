<?php

/**
* Muhammad Zulfikar
* https://github.com/razulasyura
* razul.asyura@gmail.com
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Breadcrumbs;
use SEO;
use URL;
use Setting;

use App\Gallery;
use App\Volunteer;
use App\Program;
use App\Blog;
use App\Organizer;
use App\Event;
use App\Contact;
use App\Slide;


class FrontController extends Controller
{

    var $theme = 'default';

    public function index()
    {
        // Load Theme
        Theme::init($this->theme);
        /* Change Language */
        $language = request()->segment(1);
        Setting::set('language', $language);
        // dd(request()->segment(1));
        Setting::save();
        // Page Title & Description
        $page_title = "Index";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data
        $slides = New Slide;
        $slide = $slides->all()->toArray();
        // dd($slides);
        $programs = New Program;
        $program = $programs->all()->take(4);
        $events = New Event;
        $event = $events->where('is_deleted','F')->take(4)->get();
        // Render View
        return view(strtolower($page_title), compact('page_title','slide','program','event'));
    }

    public function blog()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Blog";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data    
        $blogs = new Blog();
        $blog = $blogs->where('article_id',99)->where('is_deleted','F')->orderBy('id','desc')->paginate(3);
        // Render View
        return view(strtolower($page_title), compact('page_title','blog'));
    }

    public function blog_detail($id)
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "blog_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data
        $blogs = New Blog();
        $blog = $blogs->findOrFail($id);
        $list = $blogs->where('article_id',$blog->article_id)->where('is_deleted','F')->take(5)->get();
        // Render View
        return view(strtolower($page_title), compact('page_title','blog','list'));
    }

    public function about()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "About";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function organizer()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Team";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load data
        $organizers = New Organizer();
        $organizer = $organizers->all();
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','organizer'));
    }

    public function volunteer()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "volunteer";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $volunteers = new Volunteer();
        $volunteer = $volunteers->all();

        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','volunteer'));
    }

    public function blank()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Blank";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }


    public function contact()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Contact";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $contacts = New Contact();
        $contact = $contacts->findOrFail(1);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','contact'));
    }

    public function event()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Event";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $events = New Event();
        $event = $events->where('is_deleted','F')->orderBy('id', 'desc')->paginate(3);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','event'));
    }

    public function event_detail($id)
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "event_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data
        $events = New Event();
        $event = $events->findOrFail($id);
        $galleries = new Gallery();
        $gallery = $galleries->where('album_id',$event->album_id)->get();
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','event','gallery'));
    }


    public function gallery()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "gallery";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        
        /* Load Data */
        $galleries = new Gallery();
        $gallery = $galleries->where('is_media','F')->orderBy('created_at','DESC')->paginate(9);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','gallery'));
    }


    public function program()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "program";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Load Data
        $programs = new Program();
        $program = $programs->where('is_deleted','F')->get();
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','program'));
    }

    public function program_detail($id)
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "program_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Load Data
        $programs = New Program();
        $program = $programs->findOrFail($id);
        $blogs = new Blog();
        $blog = $blogs->where('article_id',$program->id)->where('is_deleted','F')->orderBy('id','desc')->paginate(3);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs','program','blog'));
    }


 
    /**
     * Breadcrumbs
     *
     * @param  page_title  $value
     * @return breadcrumb
     */
    public function _breadcrumbs($page_title=NULL)
    {
        $breadcrumbs = Breadcrumbs::addCrumb('Home', URL::to('/'))
        ->addCrumb($page_title, strtolower($page_title))
        ->setCssClasses('breadcrumb text-center');
        return $breadcrumbs;
    }

    /**
     * SEO
     *
     * @param  page_title  $value,$page_description $value
     * @return SEO
     */   
    
    public function change_language($language)
    {
        Setting::set('language', $language);
        Setting::save();
    }
    
    public function _seo($page_title=NULL,$page_description=NULL)
    {
        // SEO
        SEO::setTitle($page_title);
        SEO::setDescription($page_description);
        SEO::opengraph()->setUrl(URL::to('/'.strtolower($page_title)));
        SEO::opengraph()->addProperty('type', 'articles');
    }
}
