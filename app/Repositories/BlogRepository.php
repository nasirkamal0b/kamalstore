<?php
namespace App\Repositories;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogRepository
{
    public function getAll()
    {
        return Blog::latest()->get();
    }

    public function findById($id)
    {
        return Blog::findOrFail($id);
    }

    public function getLatestExcept($id, $limit = 5)
    {
        return Blog::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take($limit)
            ->get();
    }

    public function create($data)
    {
        $data['slug'] = \Str::slug($data['title']);
        if (isset($data['image'])) {
            $data['image'] = $this->uploadImage($data['image']);
        }
        return Blog::create($data);
    }

    public function update($id, $data)
    {
        $blog = Blog::findOrFail($id);
        $data['slug'] = \Str::slug($data['title']);
        if (isset($data['image'])) {
            $data['image'] = $this->uploadImage($data['image']);
        }
        $blog->update($data);
        return $blog;
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
    }

    private function uploadImage($image)
    {
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/blogs'), $filename);
        return 'uploads/blogs/' . $filename;
    }
}
