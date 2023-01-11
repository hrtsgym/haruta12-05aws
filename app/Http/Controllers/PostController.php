<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
        public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使⽤。
    {
        return view('posts/index')->with(['posts' => $post->getpaginateByLimit()]);
    }
}
