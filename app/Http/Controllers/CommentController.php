<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\HttpException;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        return Comment::create($request->all());
    }
}