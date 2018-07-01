<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KnowledgeController extends Controller
{
     public function showKnowledge(){
         return view('/intranet/user/knowledge/knowledge');
     }
}
