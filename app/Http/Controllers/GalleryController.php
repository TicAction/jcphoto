<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    public function gallery()
    {
        return view('galleries.gallerie');
    }
}
