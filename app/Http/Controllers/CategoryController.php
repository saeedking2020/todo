<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function create()
    {
        return view('newCategory');
    }

    public function create_category(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20'
        ]);

        $category = Category::create([
           'name' => $request->name
        ]);
        return redirect()->route('categories')->with('Category successfully created');
    }
    public function delete_category(Category $category)
    {
        Category::find($category->id)->delete();
        $category->tasks()->delete();

        return redirect()->back()->with('Successfully deleted');
    }
    public function edit(Category $category,Request $request)
    {
        //$category = Category::where('id',$category->id)->first();
        return view('editCategory',compact(['category']));
    }
    public function edit_category(Category $category, Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:20'
        ]);

        Category::find($category->id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories')->with('Category updated');
    }
}
