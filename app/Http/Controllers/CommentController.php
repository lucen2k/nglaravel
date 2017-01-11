<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    
    public function destroy($id)
    {
        Comment::destroy($id);
        
        return Response::json(['success' => true]);
    }
}
