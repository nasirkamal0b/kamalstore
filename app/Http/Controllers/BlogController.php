<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Comment;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    protected $blogRepo;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepo = $blogRepo;
    }

    public function index()
    {
        $blogs = $this->blogRepo->getAll();
        return view('blog', compact('blogs'));
    }

    public function showBlogList()
    {
        $blogs = $this->blogRepo->getAll();
        return view('Admin.blogCrud.blogList', compact('blogs'));
    }

    public function show($id)
    {
        $blog = $this->blogRepo->findById($id);

        if (!$blog) {
            abort(404);
        }

        // Eager load comments with users and nested replies
        $blog->load([
            'comments' => function ($query) {
                $query->whereNull('parent_id')->latest();
            },
            'comments.replies.user',
            'comments.user'
        ]);

        $otherBlogs = $this->blogRepo->getLatestExcept($id);

        $totalComments = Comment::where('blog_id', $id)->count();

        return view('blogDetail', compact('blog', 'otherBlogs', 'totalComments'));
    }




    public function create()
    {
        return view('Admin.blogCrud.blogCreate');
    }
    public function showBlogCreateForm()
    {
        return view('Admin.blogCrud.blogCreate');
    }

    public function store(BlogRequest $request)
    {
        $this->blogRepo->create($request->validated());
        return redirect()->route('blog.view')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = $this->blogRepo->findById($id);
        return view('Admin.blogCrud.blogUpdate', compact('blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        $this->blogRepo->update($id, $request->validated());
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $this->blogRepo->delete($id);
        return redirect()->route('list')->with('success', 'Blog deleted successfully.');
    }
}
