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
class FrontController extends Controller
{

    var $theme = 'default';

    public function index()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Home";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        // Render View
        return view(strtolower($page_title), compact('page_title'));
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
        // Breadcrumb
        // Render View
        return view(strtolower($page_title), compact('page_title'));
    }

    public function blog_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "blog_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        // Render View
        return view(strtolower($page_title), compact('page_title'));
    }

    public function adoption()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "Adoption";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        // Render View
        return view(strtolower($page_title), compact('page_title'));
    }

    public function adoption_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "adoption_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        // Render View
        return view(strtolower($page_title), compact('page_title'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
    }

    public function event_detail()
    {
        // Load Theme
        Theme::init($this->theme);
        // Page Title & Description
        $page_title = "event_detail";
        $page_description = "This is".$page_title." page";
        // SEO
        $this->_seo($page_title,$page_description);
        // Breadcrumb
        $breadcrumbs = $this->_breadcrumbs($page_title);
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
        // Render View
        return view(strtolower($page_title), compact('page_title','breadcrumbs'));
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
    public function _seo($page_title=NULL,$page_description=NULL)
    {
        // SEO
        SEO::setTitle($page_title);
        SEO::setDescription($page_description);
        SEO::opengraph()->setUrl(URL::to('/'.strtolower($page_title)));
        SEO::opengraph()->addProperty('type', 'articles');
    }
}
