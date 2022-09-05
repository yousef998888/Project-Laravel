<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index',[
            'products'=>Product::latest()->with('category','author')->get(),
        ]);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }


    public function show($slug)
    {
        $product=Product::where('slug',$slug)->first();
        return view('products.product',[
            'product'=> $product
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
