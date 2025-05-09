<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    protected $categoryRepository;

    // public function index(){
    //     $categories  = Category::with('Subcategory')->get();
    //     return view('layout.nav', compact('categories'));
    // }

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->categoryRepository->getAll());
    }

    public function show($id): JsonResponse
    {
        return response()->json($this->categoryRepository->findById($id));
    }

    public function store(CategoryRequest $request): JsonResponse
    {
        return response()->json($this->categoryRepository->create($request->validated()), 201);
    }

    public function update(CategoryRequest $request, $id): JsonResponse
    {
        return response()->json($this->categoryRepository->update($id, $request->validated()));
    }

    public function destroy($id): JsonResponse
    {
        return response()->json(['deleted' => $this->categoryRepository->delete($id)]);
    }
}
