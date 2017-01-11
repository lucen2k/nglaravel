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
        $info = Comment::query()
            ->where('del_flg', 0)
            ->orderBy('id', 'desc')
            ->get();
            
        return Response::json($info);
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
        $comment = Comment::find($id);
        $comment->del_flg = 1;
        $comment->save();
        
        return Response::json(['success' => true]);
    }
}
