<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoriesModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $categories;
    public function __construct()
    {
        $this->categories = CategoriesModel::getAllCategories();
    }

    public function index(){
        return view('blog.add', [
            'categories' => $this->categories,
        ]);
    }
    public function saveBlog(Request $request)
    {
        Blog::createBlog($request);
        return redirect(route('blog.add'));
    }
}
