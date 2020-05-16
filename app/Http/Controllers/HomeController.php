<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Menu;
use App\SiteConfig;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = Menu::orderBy('menu_id','asc')->get();
        $visitors = SiteConfig::where('site_config_id','=',1)->increment('site_total_visitors',1);
        $article_sql = Articles::where('article_menu_id','=',1)->where('article_active','=',1)->orderBy('article_date','desc')->limit(5)->get();
        $article_web = Articles::where('article_menu_id','=',2)->where('article_active','=',1)->orderBy('article_date','desc')->limit(5)->get();
        $article_mobile = Articles::where('article_menu_id','=',4)->where('article_active','=',1)->orderBy('article_date','desc')->limit(5)->get();
        return view('home', ['menus'=>$menus,'visitors'=>$visitors,'article_sql'=>$article_sql,'article_web'=>$article_web,'article_mobile'=>$article_mobile]);
    }






}
