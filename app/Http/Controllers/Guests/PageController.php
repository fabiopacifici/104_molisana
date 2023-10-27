<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //


    public function index()
    {
        return view('welcome');
    }


    public function products()
    {
        $products = config('molisana.products');
        //dd($products);
        // Product::all()
        //dd(Product::all());
        $products = collect(Product::all());
        //dd($products);

        /* $short = array_filter($products, fn ($product) => $product['tipo'] === 'corta');

        $long = array_filter($products, fn ($product) => $product['tipo'] === 'lunga');

        $shortest = array_filter($products, fn ($product) => $product['tipo'] === 'cortissima'); */
        $short = $products->filter(fn ($product) => $product['tipo'] === 'corta');

        $long = $products->filter(fn ($product) => $product['tipo'] === 'lunga');

        $shortest = $products->filter(fn ($product) => $product['tipo'] === 'cortissima');
        $data = [
            'products' => [
                'short' => $short,
                'shortest' => $shortest,
                'long' => $long
            ]
        ];

        //dd($data);
        return view('products', $data);
    }

    public function news()
    {

        $posts = config('molisana.posts');
        //dd($posts);
        return view('news', compact('posts'));
    }
}
