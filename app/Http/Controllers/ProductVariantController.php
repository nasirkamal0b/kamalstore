<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProductVariantRequest;
use App\Repositories\ProductVariantRepository;
use Illuminate\Http\JsonResponse;

class ProductVariantController extends Controller
{
    protected $productVariantRepository;

    public function __construct(ProductVariantRepository $productVariantRepository)
    {
        $this->productVariantRepository = $productVariantRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->productVariantRepository->getAll());
    }

    public function show($id): JsonResponse
    {
        return response()->json($this->productVariantRepository->findById($id));
    }

    public function store(ProductVariantRequest $request): JsonResponse
    {
        return response()->json($this->productVariantRepository->create($request->validated()), 201);
    }

    public function update(ProductVariantRequest $request, $id): JsonResponse
    {
        return response()->json($this->productVariantRepository->update($id, $request->validated()));
    }

    public function destroy($id): JsonResponse
    {
        return response()->json(['deleted' => $this->productVariantRepository->delete($id)]);
    }
}
