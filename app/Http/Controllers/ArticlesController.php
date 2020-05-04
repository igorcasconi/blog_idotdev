<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Menu;
use App\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{

    public function articles_list (Request $request) {

        $menus = Menu::orderBy('menu_id','asc')->get();

        $menu_id = Menu::where('menu_link',$request->id)->get();

        $type_article = DB::table('articles')->join('menus','menu_id','=','article_menu_id')
        ->where('menu_link',$request->id)->where('article_active',1)->get();

        return view('articles/articles_list', ['menus' => $menus, 'type_article' => $type_article, 'menu_id'=>$menu_id]);

    }

    public function article_item(Request $request) {

        $menus = Menu::orderBy('menu_id','asc')->get();
        $id = $request->id;
        $article = Articles::where('article_id','=',$id)->get();
        $reads = Articles::where('article_id','=',$id)->increment('article_read',1);
        return view('articles/article_item',['article'=>$article,'menus'=>$menus,'reads'=>$reads]);

    }

    public function search_article(Request $request) {

        if (empty($request->text_search)){
            $find_article = Articles::orderBy('article_date','desc')->get();
        } else {
            $find_article = Articles::where('article_title','LIKE',$request->text_search)
            ->orWhere('article_subtitle','LIKE',$request->text_search)
            ->orWhere('article_body','LIKE',$request->text_search)->orderBy('article_date','desc')->get();
        }
        $menus = Menu::orderBy('menu_id','asc')->get();
        return view('articles/article_search',['menus'=>$menus,'find_article'=>$find_article]);

    }
}
