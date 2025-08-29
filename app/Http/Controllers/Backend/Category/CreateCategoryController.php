<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|regex:/^[\p{Bengali}A-Za-z\s]+$/u|max:255',
            'slug' => 'required|unique:categories,slug|regex:/^[a-zA-Z\-]+$/|',
            'is_visible' => 'nullable|boolean',
            'parent_id' => 'nullable|exists:categories,id|regex:/^[0-9]+$/|max:3'
        ], [
            'name.required' => 'The category name is required.',
            'name.unique' => 'The category name has allready be taken.',
            'name.regex' => 'The category name must only contain letters and spaces.',
            'slug.required' => 'The category slug cannot be empty.',
            'slug.unique' => 'The category slug has allready be taken.',
            'slug.regex' => 'The category slug can only contain english alphabets and hypen only.',
            'parent_id.exists' => 'Selected Parent category is invalid.',
            'parent_id.regex' => 'Selected Parent category is invalid.',
        ]);

        $slug =  strtolower($request->slug);
        // create a new category
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->is_visible = $request->is_visible ? 1 : 0;
        $category->parent_id = $request->parent_id;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully.',
        ]);
    }
}
