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

    public function create()
    {
        return view('post.create');
    }

    public function store(Post $postModel, Request $request)
    {
        $post = $postModel->create($request->all());
        return redirect()->route('post.show', ['id' => $post->id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->slug       = $request->slug;
        $post->title      = $request->title;
        $post->excerpt    = $request->excerpt;
        $post->content    = $request->content;
        $post->published_at = $request->published_at;
        $post->published    = $request->published;
        $post->save();

        // redirect
        return redirect()->route('post.show', ['id' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post' => $post]);
    }

}
