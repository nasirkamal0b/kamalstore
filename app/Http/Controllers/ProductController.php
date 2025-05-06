<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SubcategoryRepository;


class ProductController extends Controller
{
    protected $productRepository;
    protected $CategoryRepository;
    protected $SubcategoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        SubcategoryRepository $subcategoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->CategoryRepository = $categoryRepository;
        $this->SubcategoryRepository = $subcategoryRepository;
    }



    public function showShop()
{
    return view('shop', [
        'products' => $this->productRepository->getPaginatedProducts(8)
    ]);
}


    public function index()
    {
        return view('Admin.productsView.productList', [
            'products' => $this->productRepository->getAll()
        ]);
    }


    public function create()
    {
        return view('Admin.productsView.create', [
            'categories' => $this->CategoryRepository->getAll(),
            'subcategories' => $this->SubcategoryRepository->getAll()
        ]);
    }

    public function show($id)
    {
        return view('productDetail', [
            'product' => $this->productRepository->findById($id)
        ]);
    }


    public function store(ProductRequest $request)
    {
        $this->productRepository->create($request->validated());

        return redirect()->route('shop')->with('success', 'Product added successfully.');
    }

    public function edit($id)
    {
        $product = $this->productRepository->findById($id);

        if (!$product) {
            return redirect()->route('shop')->with('error', 'Product not found.');
        }

        return view('Admin.productsView.productUpdate', compact('product'));
    }


    public function update(ProductRequest $request, $id)
    {

        $this->productRepository->update($id, $request->validated());

        return redirect()->route('products.list')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $this->productRepository->delete($id);

        return redirect()->route('products.list')->with('success', 'Product deleted successfully.');
    }
}
