<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PosController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {

        return view('posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'tital' => 'required',
            'descriptiion' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('post.index');
    }


    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
    }

    public function edit($id)
    {
        //
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
        //
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