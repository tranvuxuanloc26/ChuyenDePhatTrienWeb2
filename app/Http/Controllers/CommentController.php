<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function sendComment(Request $request)
    {
        $comments = Comment::create([
            'user_id' => Auth::user()->id,
            'content' => $request->input('comment'),
            'blog_id' => $request->input('blog_id')
        ]);
        return redirect()->back();
    }
    public function getCommentByBlogID($id)
    {
        // Lấy danh sách comments với tên người dùng
        $comments = Comment::where('blog_id', $id)->with('user')->get(); // Thêm with('user') để lấy thông tin người dùng
    
        // Trả về dữ liệu dưới dạng JSON
        return response()->json($comments);
    }
    
    }
