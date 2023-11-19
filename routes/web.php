<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products  = config('products.products');

    return view('home', compact('products'));
})->name('home');

Route::get('/donna', function () {
    $all_products  = config('products.products');
    $products = array_filter($all_products, fn($item) => $item['gender'] === 'women');
    if(empty($products)) {
        abort(404);
    }
    return view('women', compact('products'));
})->name('women');

Route::get('/uomo', function () {
    $all_products  = config('products.products');
    $products = array_filter($all_products, fn($item) => $item['gender'] === 'men');
    if(empty($products)) {
        abort(404);
    }
    return view('men', compact('products'));
})->name('men');

Route::get('/bambini', function () {
    $all_products  = config('products.products');
    $products = array_filter($all_products, fn($item) => $item['gender'] === 'kids');
    if(empty($products)) {
        abort(404);
    }
    return view('kids', compact('products'));
})->name('kids');

Route::get('/dettaglio-prodotto/{slug}', function ($slug) {

    $products = config('products.products');

    $product_array = array_filter($products, fn($product) => $product['slug'] === $slug);

    if(empty($product_array)) {
        abort(404);
    }

    $product = $product_array[array_key_first($product_array)];

    return view('productDetail', compact('product'));
})->name('productDetail');
