<?php

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Post::all();


        return view('admin.pages.posts', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Category::all();

        return view('admin.pages.postCreate', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $post = new Post();

        $post->post_title = $request->title;

        $post->post_text = $request->text;

        $post->category_id = $request->category;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $post->post_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $post->save();

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = Post::find($post);

        $categoryData = Category::all();

        return view('admin.pages.postEdit', compact('data','categoryData','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $post)
    {

        $post = Post::find($post);

        $post->post_title = $request->title;

        $post->post_text = $request->text;

        $post->category_id = $request->category;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $post->post_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $post->save();

        return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);

        $post->delete();

        return redirect('/posts');

    }
}
