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

    public function index()                         // For View File
    {
        return view('blog.add', [
            'categories' => $this->categories,
        ]);
    }

    public function saveBlog(Request $request)      // Gate data from form.
    {
        Blog::createBlog($request);
        return redirect(route('blog.manage'));
    }

    public function manageBlog()                    // Send Data to View file.
    {
        return view('blog.manage', [
            'categories' => $this->categories,
            'blogs'     => Blog::all()
        ]);
    }

}
