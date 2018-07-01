<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function showGalleryList(){
        return view('/intranet/user/gallery/galleryList');
    }

    public function showGallery($id){
        return view('/intranet/user/gallery/gallery');
    }

    
}