<?php

namespace App\Http\Controllers;

use App\Articles;
use App\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;

class ControlPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
    }

    public function login() {
        return view('auth/login');
    }

    public function control_panel() {
        $visitors = SiteConfig::find(1);
        $total_visitors = $visitors->site_total_visitors;
        $article_reads = Articles::where('article_read','>', 0)->get();
        return view('control_panel/control_panel', ['total_visitors'=>$total_visitors,'article_read'=>$article_reads]);
    }

    public function page_articles() {

        $articles = DB::table('articles')->join('menus', 'menu_id','=','article_menu_id')
            ->orderBy('article_date','desc')
            ->get();
        return view('control_panel.articles', ['articles'=>$articles,'scripts' => ['article.js']]);

    }

    public function articles(Request $request) {

        $id = $request->id;
        $menus = Menu::all();

        if(empty($id)){
            $title = 'Novo Artigo';
            $article = new Articles();
            return view ('control_panel.edit_article', ['title' => $title,'menus' => $menus, 'scripts' => ['article.js'], 'article'=>$article]);
        } else {
            $title = 'Editar Artigo';
            $article = Articles::find($id);
            return view ('control_panel.edit_article', ['title' => $title, 'article'=>$article,'menus' => $menus, 'scripts' => ['article.js'], 'id'=>$id]);
        }

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path('images'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function save_article(Request $request) {

        if(!empty($request->id)) {

            if ($request->article_active == 'on') {
                $active = 1;
            } else {
                $active = 0;
            }

            $article = Articles::find($request->id);
            $article->article_title = $request->article_title;
            $article->article_subtitle = $request->article_subtitle;
            $article->article_date = $request->article_date;
            $article->article_hour = $request->article_hour;
            $article->article_menu_id = $request->article_menu_id;
            $article->article_url = $request->article_url;
            $article->article_active = $active;
            $article->article_owner = $request->article_owner;
            $article->article_body = $request->article_body;
            $article->save();
            return redirect('/articles_panel')->with('success', 'Artigo Editado!');
        } else {

            if ($request->article_active == 'on') {
                $active = 1;
            } else {
                $active = 0;
            }

            $article = new Articles([
                'article_title'=>$request->article_title,
                'article_subtitle'=>$request->article_subtitle,
                'article_date'=>$request->article_date,
                'article_hour'=>$request->article_hour,
                'article_menu_id'=>$request->article_menu_id,
                'article_url'=>$request->article_url,
                'article_owner'=>$request->article_owner,
                'article_active'=>$active,
                'article_body'=>$request->article_body
            ]);
            $article->save();
            return redirect('/articles_panel')->with('success', 'Novo Artigo Criado!');
        }

    }

    public function delete_article(Request $request) {

        $article = Articles::find($request->id);
        $article->delete();

        return redirect('/articles_panel')->with('success', 'Artigo Excluido!');

    }

}
