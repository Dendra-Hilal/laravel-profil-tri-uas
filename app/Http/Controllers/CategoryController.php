<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('pages.admin.category.index', compact('categories'));
    }

    public function create() {
        return view('pages.admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'title' => 'required',
        ]);

        $input = $request->all();

        Category::create($input);

        return redirect('/category')->with('success', 'Data successfully added!');
    }

    public function edit(Category $category)
    {
        return view('pages.admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'title' => 'required',
        ]);

        $input = $request->all();

        $category->update($input);

        return redirect('/category')->with('success', 'Data successfully edited!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        
        return redirect('/category')->with('success', 'Data successfully deleted!');
    }
}
