<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CateroryController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
//        dd($request->post());
        $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required'
        ]);

        // Eloquent Model
        Category::create($request->post());
        return redirect()->route('categories.index')->with('success', 'Category Added Successfully');
    }


    public function show($id)
    {
        //
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
