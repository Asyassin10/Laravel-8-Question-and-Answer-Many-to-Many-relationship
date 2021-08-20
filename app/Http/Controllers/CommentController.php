<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([

            'descriptiion' => 'required',
        ]);
        $input = $request->all();
        $input['user_id']=auth()->user()->id;
        comment::created($input);
        return back();
    }


}