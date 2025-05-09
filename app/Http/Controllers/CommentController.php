<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'blog_id' => 'required|exists:blogs,id',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        Comment::create([
            'comment'   => $request->comment,
            'blog_id'   => $request->blog_id,
            'user_id'   => Auth::id(),
            'parent_id' => $request->parent_id,
        ]);

        return back()->with('success', 'Comment posted!');
    }


public function destroy($id)
{
    $comment = Comment::findOrFail($id);

    // Only allow the comment's author to delete
    if ($comment->user_id !== Auth::id()) {
        abort(403, 'Unauthorized action.');
    }

    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully.');
}


}
