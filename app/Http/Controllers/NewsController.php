<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class NewsController extends Controller
{

  //  protected $request;
  //    public function __construct(Request $request)
  //    {
  //      $this->request = $request;
  //      $this->middleware('auth')->only([
  //        'create','store', 'edit', 'destroy', 'update'
  //      ]);
  //  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      return view('admin.pages.news.index')->withPosts($posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validação

        $this->validate($request, array(
          'title' => 'required|max:100',
          'body' => 'required'
        ));

        //salvando o post no banco

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->autor = $request->autor;
        $post->save();

        Session::flash('success', 'seu post foi enviado!');

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view("admin.pages.posts.show")->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('admin.pages.posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, array(
              'title' => 'required|max:255',
              'body' => 'required'
      ));

      $post = Post::find($id);
      
      $post->title = $request->input('title');
      $post->body = $request->input('body');

      $post->save();

      Session::flash('success', 'this post has been edited,');

      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
