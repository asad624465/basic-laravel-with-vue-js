<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
    public function getAllBlogPost()
    {
    	$posts = Post::with('user','category')->orderBy("id","desc")->get();
    	return response()->json(['posts'=>$posts],200);
    }
}