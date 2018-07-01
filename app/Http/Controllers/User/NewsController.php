<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function showNews() {
        return view('/intranet/user/news/news');
    }

    public function showArticle() {
        return view('/intranet/user/news/article');
    }
    
}
