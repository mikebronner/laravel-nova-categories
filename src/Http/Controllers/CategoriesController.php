<?php

namespace GeneaLabs\LaravelNovaCategories\Http\Controllers;

use GeneaLabs\LaravelNovaBlog\Category;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index() : View
    {
        $categories = (new Category)
            ->orderBy("name")
            ->get();

        return view("categories.index")
            ->with(compact("categories"));
    }
}
