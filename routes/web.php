<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;


// Public Routes (Accessible without login)
// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
// Route::get('/', [homePageController::class, 'showRandomRecentProducts'])->name('home');



// Public Routes

Route::get('/', [homePageController::class, 'index'])->name('welcome');
Route::get('/about', function () { return view('aboutUs'); });
Route::get('/blog', [BlogController::class, 'index'])->name('blog.view');
Route::get('/contact', function () { return view('contact'); });

// Protected Routes (Require Login)
Route::middleware(['auth','prevent_back_history'])->group(function () {
    Route::get('/checkout', function () { return view('checkout'); })->name('checkout');
    Route::get('/compare', function () { return view('compare'); });
    Route::get('/customerservices', function () { return view('customerServices'); });
    Route::get('/faqs', function () { return view('faqs'); });
    // product details route
    Route::get('/productdetail{id}',[ProductController::class, 'show'])->name('show.product');
    //....
    Route::get('/shop', [ProductController::class, 'showShop'])->name('shop');
    Route::get('/sizinguide', function () { return view('sizingGuide'); });
    Route::get('/tracking', function () { return view('trackingOrder'); });
});

require __DIR__.'/auth.php';

// Redirect logged-in users away from login/register pages
Route::middleware(['guest','prevent_back_history'])->group(function () {
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/'); // Redirect to home or dashboard
    }
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    if (Auth::check()) {
        return redirect('/'); // Redirect to home or dashboard
    }
    return view('auth.register');
})->name('register');
});


// route For email..

Route::get('/forgotpassword', [ForgotPasswordController::class, 'showForgotPassForm'])->name('EmailForm');
Route::post('/sendpassword', [ForgotPasswordController::class, 'sendPassword'])->name('sndpassword');

Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/resetpassword', [ResetPasswordController::class, 'resetPassword'])->name('password.update');


// routes for catogories and Products
Route::get('/subcategory/{id}', [SubcategoryController::class, 'show'])->name('subcategory.show');

// Route::resource('categories', CategoryController::class);
// Route::resource('subcategories', SubcategoryController::class);
// Route::resource('products', ProductController::class);

// Category Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Subcategory Routes
Route::get('/subcategories', [SubcategoryController::class, 'index'])->name('subcategories.index');
Route::get('/subcategories/create', [SubcategoryController::class, 'create'])->name('subcategories.create');
Route::post('/subcategories', [SubcategoryController::class, 'store'])->name('subcategories.store');
Route::get('/subcategories/{id}', [SubcategoryController::class, 'show'])->name('subcategories.show');
Route::get('/subcategories/{id}/edit', [SubcategoryController::class, 'edit'])->name('subcategories.edit');
Route::put('/subcategories/{id}', [SubcategoryController::class, 'update'])->name('subcategories.update');
Route::delete('/subcategories/{id}', [SubcategoryController::class, 'destroy'])->name('subcategories.destroy');

// Product Routes
Route::get('/products/list', [ProductController::class, 'index'])->name('products.list'); // Show the form
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Show the form
Route::post('/products/submit', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Product Variant Routes
Route::get('/product-variants', [ProductVariantController::class, 'index'])->name('productVariants.index');
Route::get('/product-variants/create', [ProductVariantController::class, 'create'])->name('productVariants.create');
Route::post('/product-variants', [ProductVariantController::class, 'store'])->name('productVariants.store');
Route::get('/product-variants/{id}', [ProductVariantController::class, 'show'])->name('productVariants.show');
Route::get('/product-variants/{id}/edit', [ProductVariantController::class, 'edit'])->name('productVariants.edit');
Route::put('/product-variants/{id}', [ProductVariantController::class, 'update'])->name('productVariants.update');
Route::delete('/product-variants/{id}', [ProductVariantController::class, 'destroy'])->name('productVariants.destroy');

// Product Routes
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('view');
    Route::get('/list', [BlogController::class, 'showBlogList'])->name('list');
    Route::get('/create/form', [BlogController::class, 'showBlogCreateForm'])->name('create');
    Route::post('/submit', [BlogController::class, 'store'])->name('store');
    Route::get('/{id}', [BlogController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
});


Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



// routes For Add to Cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');








// dummy route
use App\Models\Subcategory;

Route::get('/get-subcategories/{category_id}', function ($category_id) {
    return Subcategory::where('category_id', $category_id)->get();
});


// Undefine route 404 Page..

Route::fallback(function () {
    return response()->view('error.404', [], 404);
});


