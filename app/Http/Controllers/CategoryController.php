<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {   
        $category = new Category();
        return view('posts', [
            'posts' => $category->posts,
            'currentCategories' => $category,
            'categories' => Category::all()
        ]);
    }
}
