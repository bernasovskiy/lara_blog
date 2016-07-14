<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Article;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $articles=Article::where('public','=',1)->get();
        return view('site.index',['articles' => $articles]);
    }

    public function show($id){
        $article=Article::where('public','=',1)->find($id); //показываем статью если она опубликована
        $comments=Article::where('public','=',1)->find($id)->comments()->where('public','=','1')->get();; // выбираем все комментарии, который относятся к статье
        return view('site.show',['article'=>$article,'comments'=>$comments]);
    }
}
