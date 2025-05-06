<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Models\Product;

class homePageController extends Controller
{

    public function index()
    {
        // Fetch recent products (order by created_at)
        $recentProducts = Product::orderBy('created_at', 'desc')->limit(6)->get();

        // Fetch popular products (order by views)
        $popularProducts = Product::orderBy('views', 'desc')->limit(6)->get();

        // Fetch best selling products (order by sales count)
        $bestSellingProducts = Product::orderBy('sales', 'desc')->limit(10)->get();

        $slides = HeroSlide::all(); // Fetch all slides from database

        return view('welcome', compact('recentProducts', 'popularProducts', 'bestSellingProducts', 'slides'));
    }

}
