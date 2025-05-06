<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubcategoryRequest;
use App\Repositories\ProductRepository;
use Illuminate\Http\JsonResponse;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    // public  function show($id){
    //     $subcategory = Subcategory::with('product')->findOrFail($id);
    //     return view('subcategory.show', compact('subcategory'));
    // }
    protected $subcategoryRepository;

    public function __construct(SubcategoryRequest $subcategoryRepository)
    {
        $this->subcategoryRepository = $subcategoryRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->subcategoryRepository->getAll());
    }

    public function show($id): JsonResponse
    {
        return response()->json($this->subcategoryRepository->findById($id));
    }

    public function createForm()
    {
        return view('Admin.SubCategory.subForm');
    }

    public function store(SubcategoryRequest $request): JsonResponse
    {
        return response()->json($this->subcategoryRepository->Form($request->validated()), 201);
    }

    public function update(SubcategoryRequest $request, $id): JsonResponse
    {
        return response()->json($this->subcategoryRepository->update($id, $request->validated()));
    }

    public function destroy($id): JsonResponse
    {
        return response()->json(['deleted' => $this->subcategoryRepository->delete($id)]);
    }
}
