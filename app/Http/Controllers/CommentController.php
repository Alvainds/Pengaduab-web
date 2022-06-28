<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        //print_r($request); exit();
        $request->validate([
            'comment' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        //print_r($input); exit();

        Comment::create($input);

        return back();
    }
}
