<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index()
   {
        $posts = Post::where('status',1)->get();
        return view('frontend.index',['posts'=>$posts]);
   }

   public function showSinglePost($slug,$id)
   {
    return view('frontend.singlePost',['post'=>Post::where('id',$id)->where('slug',$slug)->first()]);
   }
}
