<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

use App\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return Response::json(Comment::get());
    }
    
    public function store()
    {
        Comment::create([
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ]);
        
        return Response::json(['success' => true]);
    }
    
    public function destory($id)
    {
        Comment::destory($id);
        
        return Response::json(['success' => true]);
    }
}
