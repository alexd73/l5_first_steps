<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{

    public function index(Post $postModel)
    {
        $posts = $postModel->getPublishedPosts();

        return view('post.index', ['posts' => $posts]);
    }

    public function unpublished(Post $postModel)
    {
        $posts = $postModel->getUnPublishedPosts();

        return view('post.index', ['posts' => $posts]);
    }
}