<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts=Post::all();
        //$posts=Post::orderBy('id','desc')->get();
        $posts=Post::orderBy('id','asc')->paginate(10);
        //return view('posts.index')->with('posts',$posts);
        $user_id = auth()->user()->id;
        $user=User::find($user_id);
        return view('home')->with('posts',$user->posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required',
            'description' => 'required']);
        $post=new Post;
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->user_id=auth()->user()->id;
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
        $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post=Post::find($id);
         return view('posts.edit')->with('post',$post);
      
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
        $this->validate($request, ['title' => 'required',
            'description' => 'required']);
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
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
        $post=Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
