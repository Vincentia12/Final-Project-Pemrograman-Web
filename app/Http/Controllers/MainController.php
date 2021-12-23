<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

class MainController extends Controller
{
    public function home()
    {
        $articles = Article::latest()->limit(3)->get();
        return view('layouts.home',compact('articles'));
    }

    public function visimisi()
    {
        return view('layouts.visimisi');
    }

    public function article()
    {
        return view('layouts.article');
    }

    public function events()
    {
        return view('layouts.events');
    }

    public function suara()
    {
        return view('layouts.suara-wanita');
    }

    public function member()
    {
        return view('layouts.member');
    }
    
    public function inputsw()
    {
        return view('layouts.inputsw');
    }
}
