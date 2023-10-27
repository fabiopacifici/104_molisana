<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/news', [PageController::class, 'news'])->name('news');










/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */


/* Route::get('/products', function () {

    $products = config('molisana.products');
    //$products = collect(config('molisana.products'));
    // Product::all(); We do not have a db yet!

    //test_filter_collection = $products->filter(fn ($value) => $value['tipo'] === 'corta');


    //dd($test_filter_collection);
    //$data = [
    //    'products' => config('molisana.products')
    //];
    // return view('products', $data);

    $short = array_filter($products, fn ($product) => $product['tipo'] === 'corta');
    //dd($short);

    $long = array_filter($products, fn ($product) => $product['tipo'] === 'lunga');
    //dd($long);

    $shortest = array_filter($products, fn ($product) => $product['tipo'] === 'cortissima');
    //dd($short, $long, $shortest);


    $data = [
        'products' => [
            'short' => $short,
            'shortest' => $shortest,
            'long' => $long
        ]
    ];

    //dd($data);

    return view('products', $data);
    //return view('products', compact('products'));
})->name('products'); */



/*
Route::get('/news', function () {

    $posts = config('molisana.posts');
    //dd($posts);
    return view('news', compact('posts'));
})->name('news');
 */
